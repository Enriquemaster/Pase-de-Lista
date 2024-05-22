<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attendanceStudent(): hasMany
    {
        return $this->hasMany(AttendanceStudent::class);
    }

    public function clases()
    {
        return $this->belongsToMany(Clase::class, 'attendance_student', 'attendances_id', 'student_id');
    }
    

}
