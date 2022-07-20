<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTime extends Model
{
    use HasFactory;

    protected $table = 'employee_time';
    protected $primaryKey ='employee_id';

    public $fillable = [
        'date',
        'check_in',
        'check_out',
        'location',
        'longitude',
        'latitude',
        'photo',
        'notes',
    ];


}
