<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollinfo extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'enrollinfo';
    protected $fillable = ['readflag', 'delflag'];

    public function formiteminfos(){
        return $this->hasMany('App\Models\Formiteminfo','enrollinfo_id','id');
    }
}
