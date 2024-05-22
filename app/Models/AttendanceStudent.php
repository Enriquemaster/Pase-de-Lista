<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class AttendanceStudent extends Model

{
    protected $fillable = ['attendances_id', 'student_id', 'asistencia', 'observaciones'];
    protected $table = 'attendance_student';

    use HasFactory;

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }


}
