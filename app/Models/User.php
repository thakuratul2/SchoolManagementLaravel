<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getsingle($id){

        return self::find($id);
    }
    static public function getAdmin(){

        return self::select('users.*')->where('user_type','=','1')->where('is_deleted','=','0')->orderBy('id','asc')->paginate(20);
    }

    static public function getEmailSingle($email){

        return User::where('email', '=', $email)->first();
        
    }

    static public function getStudent(){
        return self::select('users.*')->where('users.user_type','=',4)->where('users.is_deleted','=',0)->orderBy('users.id','asc')->paginate(20);

    }

    public function getProfile(){
        if(!empty($this->profile_pic) && file_exists('upload/student_pic/'.$this->profile_pic)){

            return url('upload/student_pic/', $this->profile_pic);
        }else{
            return "";
        }
    }
}
