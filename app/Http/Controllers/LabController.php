<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
  public function store(Request $request) {
        $name = request('name');
        $path = $request->file('doc')->storeAs('/labs', $name . rand(1111, 9999) . '.pdf');


    // create a new patient using the form data
    $order = new \App\Lab;
    $order->name = $name;
    $order->description = request('description');
    $order->path = $path;
    $pat_id = request('patient_id');
    if($pat_id != null) {
    $order->patient_id = request('patient_id');
    }
    // save it to the database
    $order->save();

    // redirect to home page
    return redirect('/home');

  }
}
