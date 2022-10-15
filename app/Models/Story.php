<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    
    protected $table = 'stories';

    public function stories()
    {
        return $this->hasMany(Gallery::class, 'reference_id', 'id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'created_by_user_id');
    }
}
