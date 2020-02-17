<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formitem extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'formitem';

    protected $fillable = ['name', 'activities_id', 'formtagname', 'need', 'order', 'media_ex'];

    public function activities(){
        return $this->belongsTo('App\Models\Activities','activities_id');
    }

    public function childformitems(){
    	return $this->hasMany('App\Models\Childformitem','formitem_id','id');
    }

    public function formiteminfos(){
        return $this->hasMany('App\Models\Formiteminfo','formitem_id','id');
    }
}
