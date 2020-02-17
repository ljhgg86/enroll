<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formrow extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'formrow';
    protected $fillable = [ 'activities_id', 'bordercolor'];

    public function activities(){
        return $this->belongsTo('App\Models\Activities','activities_id');
    }

    public function formcols(){
        return $this->hasMany('App\Models\Formcol','formrow_id','id');
    }

}
