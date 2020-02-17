<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childrow extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'childrow';
    protected $fillable = [ 'formcol_id', 'bordercolor'];

    public function formcol(){
        return $this->belongsTo('App\Models\Formcol','formcol_id');
    }

    public function childcols(){
        return $this->hasMany('App\Models\Childcol','childrow_id','id');
    }
}
