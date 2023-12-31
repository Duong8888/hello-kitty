<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GroupMember
 *
 * @property int $id
 * @property int $group_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Group|null $group
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupMember whereUserId($value)
 * @mixin \Eloquent
 */
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
