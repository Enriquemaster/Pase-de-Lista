<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attendance extends Model
{
    use HasFactory;

    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attendanceStudent(): hasMany
    {
        return $this->hasMany(AttendanceStudent::class);
    }
    

    protected $fillable = ['fecha_clase', 'tema', 'clase_id'];
}
