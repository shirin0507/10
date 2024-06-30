<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $guarded = [
        'id',
    ];
    use HasFactory;
    protected $fillable = [
        'classrooom_id',
        'branch_id',
        'teacher_id',
    ];
    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }

    public function branch() {
        return $this->belongsTo(Branch::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
