<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //связь с ролями
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    //метод определения прав доступа
    //в permission можно передать как одно право так и массив 84 -7.30
    public function canDo($permission, $require = FALSE)
    {

        if(is_array($permission))
        {
// несколько привелегий 84 14.00
        }
        else
        {
            foreach($this->roles as $role)
            {
                foreach($role->perms as $perm)
                {
                    if(str_is($permission, $perm->name))
                    {
                        return TRUE;
                    }
                }
            }
        }

    }

}
