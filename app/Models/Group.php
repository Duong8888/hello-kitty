<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $group_name
 * @property string $image
 * @property int $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GroupMember> $groupMembers
 * @property-read int|null $group_members_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
