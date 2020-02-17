<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childcol extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'childcol';
    protected $fillable = [ 'childrow_id', 'name', 'defaulted', 'bordercolor', 'attach'];

    public function chilidrow(){
        return $this->belongsTo('App\Models\Childrow','childrow_id');
    }
}
