<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class students extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;



    protected $table = 'students';

    protected $fillable = ['name', 'email', 'is_admin', 'password', 'sex', 'phone', 'pro_class'];

    protected $hidden = ['password', 'remember_token'];

    public function grade()
    {
        return $this->hasOne('App\Grade');
    }
    protected static function rules()
    {
        return [
            'id' => 'required|digits:10',
            'password' => 'required'
        ];
    }




}
