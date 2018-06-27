<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Assignment;
use DB;
use App\Models\assignment;
use Laravel\Lumen\Routing\Controller as BaseController;

class assignmentController extends BaseController {

  public function getAllAssignment($cat) {
    $data = DB::select("SELECT * FROM assignment where category=" . $cat);
    return response()->json($data);
  }

  public function assignmentDatas() {
    $alldata = assignment::all();
    return response()->json($alldata);
  }

  public function assignmentvalue($id) {
    $alldata = assignment::assignmentval($id);
    return response()->json($alldata);
  }
}
