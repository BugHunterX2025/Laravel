<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function companyPhoneNo()
    {
        return $this->hasOneThrough(Phone_number::class, company::class, 'student_id', 'company_id', 'id', 'id');
    }
    public function company()
    {
        return $this->hasOne(company::class);
    }
}
