<?php

namespace app\models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adhesion extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;
    protected $table = "adhesion";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'mdp', 'mail', 'adresse', 'telephone', 'date_adhesion'];

}