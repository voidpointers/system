<?php

namespace Shop\Entities;

use App\Model;

class Shop extends Model
{
    protected $hidden = ['access_token', 'access_secret'];

    protected $table = 'shops';
}
