<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'is_active', 'expired_at'];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id');
    }
}