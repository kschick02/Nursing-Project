<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function store(Request $request) {

        $file = $request->file('doc');
        $path = $file->getRealPath();
        $files = file_get_contents($path);


    // create a new patient using the form data
    $order = new \App\Order;
    $order->name = request('name');
    $order->doc = $files;
    $pat_id = request('patient_id');
    if($pat_id != null) {
    $order->patient_id = request('patient_id');
    }
    $order->completed = request('completed');

    // save it to the database
    $order->save();

    // redirect to home page
    return redirect('/');

  }
}