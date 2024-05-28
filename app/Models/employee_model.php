<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_model extends Model
{
    use HasFactory;
    protected $table = 'employee_tbl';

    protected $fillable = [
    'fname',
    'mname',
    'lname',
    'address',
    'country',
    'state',
    'city',
    'zip',
    'age',
    'bdate',
    'dhired',
    'dept',
    'div'
    ];
}
