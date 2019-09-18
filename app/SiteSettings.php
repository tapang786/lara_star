<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    //

    use Notifiable, HasApiTokens;


    protected $table = 'site_settings';

    protected $fillable = [
        'id', 'site_title', 'site_desc', 'site_logo'
    ];

}