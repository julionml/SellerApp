<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table ='sales';

    protected  $fillable = [
        'PaypalAddress',
        'EmailAddress',
        'CloudCoins',
        'slug',
    ];

    public function getPaypalAddress()
    {
        return $this->attributes['PaypalAddress'];
    }

    public function getEmailAddress()
    {
        return $this->attributes['Emailddress'];
    }

    public function getCloudCoins()
    {
        return $this->attributes['CloudCoins'];
    }

    public function getSlug()
    {
        return $this->attributes['slug'];
    }

}
