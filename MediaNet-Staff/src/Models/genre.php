<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:17
 */

namespace app\models;


class Genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "genre";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'description'];

    public function document() {
        return $this->hasMany('app\models\document');
    }

}

