<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\UserResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName','nacimiento','perfil_id','rol_id','escalafon_id','titulo','tipoContrato','email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['nacimiento'];

    public function perfil(){ //$user->perfil->nombre
        return $this->belongsTo(Perfil::class); //Pertenece a una categoría.
    }

    public function rol(){ //$user->escalafon->nombre
        return $this->belongsTo(rols::class); //Pertenece a una categoría.
    }

    public function escalafon(){ //$user->escalafon->nombre
        return $this->belongsTo(Escalafon::class); //Pertenece a una categoría.
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPassword($token));
    }
}
