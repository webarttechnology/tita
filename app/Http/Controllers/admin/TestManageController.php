<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{TestQuestion, TestInstruction};

class TestManageController extends Controller
{
    //

    public function list(){
           $tests = TestQuestion::orderBy('id', 'desc')->get();
           return view('admin.test.list', compact('tests'));
    }

    public function add(){
        return view('admin.test.add');
    }

    public function store(Request $request){
           $request->validate([
               'question' => 'required',
               'option1' => 'required',
               'option2' => 'required',
               'option3' => 'required',
               'option4' => 'required',
               'answer' => 'required',
               'status' => 'required',
           ]);

           /**
            * Test Answer
           */

           switch ($request->answer) {
            case 'option1':
                $answer = $request->option1;
                break;
            case 'option2':
                $answer = $request->option2;
                break;
            case 'option3':
                $answer = $request->option3;
                break;
            default:
                $answer = $request->option4;
                break;
           }

           TestQuestion::create([
                 'question' => $request->question,
                 'option1' => $request->option1,
                 'option2' => $request->option2,
                 'option3' => $request->option3,
                 'option4' => $request->option4,
                 'answer' => $answer,
                 'status' => $request->status,
           ]);

           return redirect('admin/exam/list')->with('success', 'Question Successfully Added');
        }
        
        public function delete($id){
            TestQuestion::find($id)->delete();
            return redirect('admin/exam/list')->with('success', 'Question Successfully Deleted');
        }

        public function edit($id){
            $test = TestQuestion::where('id', $id)->first();
            return view('admin.test.edit', compact('test'));
        }

        public function update(Request $request, $id){
            $request->validate([
                'question' => 'required',
                'option1' => 'required',
                'option2' => 'required',
                'option3' => 'required',
                'option4' => 'required',
                'answer' => 'required',
                'status' => 'required',
            ]);
 
            /**
             * Test Answer
            */
 
            switch ($request->answer) {
             case 'option1':
                 $answer = $request->option1;
                 break;
             case 'option2':
                 $answer = $request->option2;
                 break;
             case 'option3':
                 $answer = $request->option3;
                 break;
             default:
                 $answer = $request->option4;
                 break;
            }
 
            TestQuestion::whereId($id)->update([
                  'question' => $request->question,
                  'option1' => $request->option1,
                  'option2' => $request->option2,
                  'option3' => $request->option3,
                  'option4' => $request->option4,
                  'answer' => $answer,
                  'status' => $request->status,
            ]);
 
            return redirect('admin/exam/list')->with('success', 'Question Successfully Updated');
        }

        /**
         * Test instruction
        */

         public function test_instruction(){
                $instruction = TestInstruction::first();
                return view('admin.test.instruction', compact('instruction'));
         }

         public function instruction_save(Request $request){
                $request->validate([
                      'instruction' => 'required' 
                ]);

                if(TestInstruction::exists()){
                    TestInstruction::first()->update([
                        'instruction' => $request->instruction,
                    ]);
                }else{
                    TestInstruction::create([
                        'instruction' => $request->instruction,
                    ]);
                }

                return redirect()->back()->with('success', 'Instruction Saved Successfully');
         }
}