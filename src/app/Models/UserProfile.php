<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name','address','city','state','phone_no','user_id','picture'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function created_by()
    {
        return $this->hasOne(User::class,'id','created_by_user_id');
    }

    public function updated_by()
    {
        return $this->hasOne(User::class,'id','updated_by_user_id');
    }
}
