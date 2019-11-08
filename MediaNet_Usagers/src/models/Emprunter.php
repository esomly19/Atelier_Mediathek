<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 16:18
 */

namespace app\models;


class Emprunter extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "emprunter";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['id_document', 'id_utilisateur', 'date_emprunt', 'date_retour', 'date_limite'];

    public function document() {
        return $this->belongsTo('app\models\document', 'id_document', 'id');
    }

    public function utilisateur() {
        return $this->belongsTo('app\models\utilisateur', 'id_utilisateur', 'id');
    }


}

