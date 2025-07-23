<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', // This corresponds to your 'Student Name' input
        'student_id',   // This corresponds to your 'Student ID' input
        'course',
        'section',
        'year_level',
        // Add any other fields you expect to fill from a form
    ];

    // If you had 'name' in your form and your database column is also 'name',
    // you would add 'name' here. However, your form uses 'student_name'.
    // So, make sure the names here match your database column names.
}