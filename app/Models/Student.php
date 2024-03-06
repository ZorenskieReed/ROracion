<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'middlename',
        'suffix',
        'gender',
        'dateofbirth',
        'address',
        'tutor',
        'created_at',
        'updated_at'


    ];

    protected $table = 'student';

    protected $primaryKey= 'studentid';
}
