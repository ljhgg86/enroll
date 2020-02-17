<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childformitem extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'childformitem';

    protected $fillable = ['name', 'formitem_id', 'order', 'defaultflag'];

    public function formitem(){
        return $this->belongsTo('App\Models\Formitem','formitem_id');
    }
}
