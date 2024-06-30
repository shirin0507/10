<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [
        'id',
    ];

    protected function casts()
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    protected $fillable = [
        'name',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
