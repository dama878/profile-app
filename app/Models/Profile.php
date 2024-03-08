<?php

namespace App\Models;

use App\Models\WorkExperience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'role'];

    public function workExperiences(){
        return $this->hasMany(WorkExperience::class);
    }
}

