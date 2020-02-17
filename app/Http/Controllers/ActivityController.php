<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;
use App\Models\Formitem;
use Response;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->activity = new Activities();
        $this->formitem = new Formitem();
    }

    //获取指定活动编辑信息和选项可选类型列表
    public function getActivity($id){
        $activity = $this->activity->getActivities($id);
        return response()->json([
            'status' => true,
            'activity' => $activity
        ]);
    }
}
