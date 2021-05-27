<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //https://laravel.com/docs/8.x/eloquent-relationships#has-one-of-many
    public function latestOrder()
    {
        return $this->hasOne(Order::class)->latestOfMany();
    }

    public function oldestOrder()
    {
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    public function largestOrder()
    {
        return $this->hasOne(Order::class)->ofMany('price', 'max');
    }

    public function unpaidLatestOrder()
    {
        return $this->hasOne(Order::class)->ofMany([
            'id' => 'max',
        ], function ($query) {
            $query->whereNull('paid_at');
        });
    }

}
