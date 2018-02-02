<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Special extends Eloquent
{
    protected $table = 'special';
    protected $fillable = ['day', 'name', 'description', 'available_time', 'store_id'];
    public $timestamps = [];
}