<?php
namespace app\models;


class Document extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "document";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['id_image', 'titre', 'description', 'code', 'etat', 'id_genre', 'type'];

    public function genre() {
        return $this->belongsTo('app\models\genre');
    }

    public function image() {
        return $this->belongsTo('app\models\image');
    }
}
