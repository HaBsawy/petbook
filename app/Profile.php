<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'image', 'city', 'dob', 'pet', 'petName'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
