<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_name',
        'image',
        'created_by',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function groupMembers(){
        return $this->hasMany(GroupMember::class,'group_id','id');
    }
}
