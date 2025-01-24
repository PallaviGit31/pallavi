<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class State extends Authenticatable
{   
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}