<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:15
 */

namespace app\models;


class Image extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "image";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'description', 'path'];

    public function document() {
        return $this->hasMany('app\models\document');
    }
}