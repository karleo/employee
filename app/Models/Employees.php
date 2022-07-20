<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EmployeeTime;

class Employees extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'emp_no',
        'fname',
        'mname',
        'lname',
        'contact_no',
        'mobile_no',
        'address',
        'company',
        'company_add',
        'email_add',
        'website',
        'photo',
        'qr_path',
        'job_position',
    ];

    public function employeetime(){
        return $this->hasOne(EmployeeTime::class, 'employee_id', 'id');
    }
}
