<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'joining_date', 'fee'];

    use HasFactory;
}
