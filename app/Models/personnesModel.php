<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personnesModel extends Model
{
    protected $table = 'personnes';
    protected $fillable =[
        "id",
        "name",
        "prenom",
        "email",
        "password",
        "active",
        "created_at",
        "updated_at"
    ];

}
