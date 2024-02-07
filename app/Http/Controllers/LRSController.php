<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LRSController extends Controller
{
  public function index()
  {
      $data = LRS::all();
      return response()->json($data);
  }
  public function update(Request $request, $id)
  {
      $data = LRS::find($id);
      $data->stopid = $request->stopid;
      $data->start_time = $request->start_time;
      $data->end_time = $request->end_time;
      $data->machine_name = $request->machine_name;
      $data->loss_category = $request->loss_category;
      $data->loss_reason = $request->loss_reason;
      $data->loss_duration = $request->loss_duration;
      $data->can_edit = $request->can_edit;
      $data->save();
      return redirect('lrs');
  }
}
