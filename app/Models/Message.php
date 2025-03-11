<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Define the table name (optional if it's the plural of the model name)
    protected $table = 'messages';

    // Define the fields that are mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'message',
        'reply',
    ];

    // Optionally define hidden attributes (attributes you don't want to include in model serialization)
    // protected $hidden = ['created_at', 'updated_at'];

    // Define the timestamps (if you don't want the model to manage them, set this to false)
    public $timestamps = true;
}
