<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class rfidModel extends Model
{
    protected $table = "rfidusers";
    protected $primaryKey = "user_id";
    use HasFactory;


    protected $fillable = [
        'fullname', 'email', 'password','rfid'
    ];
}
