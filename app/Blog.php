<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $filltable = ['title', 'content', 'image'];
}
