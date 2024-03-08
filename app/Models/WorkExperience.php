<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $fillable = [
       'company_name',
       'tile',
       'city',
       'software_usage',
       'start_date',
       'end_date',
       'employee_here',
       'describe',
       'resume'
    ];
}
