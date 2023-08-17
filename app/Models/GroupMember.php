<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'user_id'
    ];
    public function users(){
        return $this->hasMany(User::class,'user_id','id');
    }
    public function group(){
        return $this->belongsTo(Group::class,'group_id','id');
    }
}
