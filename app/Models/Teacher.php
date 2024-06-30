<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $fillable = [
      'first_name',
      'last_name',
    ];
    public function lessons() {
        return $this->hasMany(Lesson::class);
    }
}
