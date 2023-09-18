<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [ // definit proprietà model 
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'artists',
        'writers',
    ];


    //$guarded per i non mass assignment
}
