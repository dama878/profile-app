<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
