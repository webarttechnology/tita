<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallerTestResult extends Model
{
    use HasFactory;

    protected $table = "installer_test_results";
    protected $fillable = [
        'installer_id',
        'exam_link_id',
        'total_question',
        'correct_question',
        'percent_obtain',
        'status'
    ];
}
