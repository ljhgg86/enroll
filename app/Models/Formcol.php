<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formcol extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'formcol';
    protected $fillable = [ 'activities_id', 'bordercolor'];

    public function formrow(){
        return $this->belongsTo('App\Models\Formrow','formrow_id');
    }

    public function formtype(){
        return $this->belongsTo('App\Models\Formtype','formtype_id');
    }

    public function childrows(){
        return $this->hasMany('App\Models\Childrow','formcol_id','id');
    }
}
