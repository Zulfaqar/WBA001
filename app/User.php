<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function isUserExist($username)
    {
        $result = $this->where('username', $username)
            ->pluck('id')
            ->first();

        if ($result) {
            return $result;
        }

        return false;
    }

//    public function getUserById($user_id)
//    {
//        $rs = $this->select('name', 'email', 'phone', 'login_id', 'user_from', 'country_code', 'dob', 'state')
//            ->where('id', $user_id)
//            ->first()
//            ->toArray();
//
//        return $rs;
//    }
}
