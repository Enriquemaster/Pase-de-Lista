<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ClaseStudent extends Model
{

    protected $table = 'clase_student';

    use HasFactory;

    public function clases(): BelongsTo
    {
        return $this->belongsTo(Clase::class);
    }

    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}
