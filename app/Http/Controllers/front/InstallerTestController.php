<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Installer, InstallerTestResult, TestQuestion, TestInstruction};

class InstallerTestController extends Controller
{
    //

    /**
     * 
    */

    public function instruction_page($code){
           $instruction = TestInstruction::first();
           return view('installer.test.instruction', compact('code', 'instruction'));
    }

    public function exam_page($code=''){
        if($code == ''){
             abort(404);
        }else{
            if(Installer::where('exam_link_id', $code)->exists()){
                /**
                 * If, a installer already clear the exam
                */

                if(InstallerTestResult::where('exam_link_id', $code)
                ->where('status', 'Pass')->exists()){
                    $msg = 'You Have Already Cleared the Exam';
                    return redirect(url('exam/success/page', ['code' => $code, 'msg' => $msg]));
                }else{

                    /**
                     * installer will unable to access the page if they 
                     * already give tests for 3 times
                    */

                    $test_count = count(InstallerTestResult::where('exam_link_id', $code)->get());

                    if($test_count > 2){
                        $msg = 'Your Test Attempt Has been Over';
                        return redirect(url('exam/fail/page', ['code' => $code, 'msg' => $msg, 'attempt' => $test_count]));
                    }else{
                        return $this->test($code);
                    }

                }
            }else{
                abort(401);
            }
        }
    }
    
    public function test($code){
        $questions = TestQuestion::whereStatus('active')->inRandomOrder()->get();
        $totalQuestion = count($questions);
        $noOfAttempt = count(InstallerTestResult::where('exam_link_id', $code)->get());
        $timeLimit = (TestInstruction::first())->time_limit;
        return view('installer.exam', compact('questions', 'code', 'totalQuestion', 'noOfAttempt', 'timeLimit'));
    }

    public function submitExam(Request $request){

        $mark = 0;
        $correct_question = 0;
        $percent = 0;
        $total_questions = count($request->question_id);
        $inst_details = Installer::where('exam_link_id', $request->exam_code_id)->first();

        foreach($request->question_id as $qid){
                  if(isset($request->option[$qid])){
                      $qDetails = TestQuestion::whereId($qid)->first();
                      
                      /**
                       * check user given answer with actual answer 
                      */

                      if($request->option[$qid] == $qDetails->answer){
                           /**
                            * for correct answer 
                           */

                            $correct_question +=1;
                      }
                  }
                  
                //   else{
                //       return redirect()->back()->with('error', 'All Questions are mandatory');
                //   }
        }

        $percent = ($correct_question/$total_questions)*100;
        $status = ($percent >= 80) ? "Pass" : "Fail";
        
        InstallerTestResult::create([
            'installer_id' => $inst_details->id,
            'exam_link_id' => $request->exam_code_id,
            'total_question' => $total_questions,
            'correct_question' => $correct_question,
            'percent_obtain' => $percent,
            'status' => $status,
        ]);

        if($status == "Pass"){
            Installer::whereId($inst_details->id)->update([
                'approvel_by_admin' => 'approved',
            ]);

            $msg = 'You Have Successfully Clear the Exam';
            return redirect(url('exam/success/page', ['code' => $request->exam_code_id, 'msg' => $msg]));
        }else{
            $test_count = count(InstallerTestResult::where('exam_link_id', $request->exam_code_id)->get());

            $status = ($test_count > 2) ? 'rejected' : 'in_progress';
            Installer::whereId($inst_details->id)->update([
                'approvel_by_admin' => $status,
            ]);

            $msg = "Sorry! You have unable to clear the Exam";
            return redirect(url('exam/fail/page', ['code' => $request->exam_code_id, 'msg' => $msg, 'attempt' => 0]));
        }
    }

    public function examSuccess($code = '', $msg = ''){
        $examDetails = InstallerTestResult::where('exam_link_id', $code)->get();
        return view('installer.test.success', compact('msg', 'code', 'examDetails'));
    }

    public function examFail($code = '', $msg = '', $attempt = ''){
        $examDetails = InstallerTestResult::where('exam_link_id', $code)->get();
        return view('installer.test.fail', compact('msg', 'code', 'attempt', 'examDetails'));
    }
}