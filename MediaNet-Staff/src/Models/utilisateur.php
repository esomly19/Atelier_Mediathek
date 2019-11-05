<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:08
 */
namespace app\models;

class Utilisateur extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "utilisateur";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'mdp', 'mail', 'adresse', 'telephone', 'date_adhesion'];

    public function emprunter() {
        return $this->hasMany('app\models\emprunter');
    }
}