<?php

namespace App;
use App\Grade;
use DB;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
