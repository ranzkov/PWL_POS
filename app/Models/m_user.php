<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    protected $table = "m_user";
    public $timestamp = false;
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'password',
        'created_at',
        'updated_at'
    ];
}