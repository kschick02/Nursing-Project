<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
  public function store(Request $request) {
        $name = request('name');
        $path = $request->file('doc')->storeAs('/labs', $name . rand(1111, 9999) . '.pdf');


    // create a new patient using the form data
    $lab = new \App\Lab;
    $lab->name = $name;
    $lab->description = request('description');
    $lab->path = $path;
    $pat_id = request('patient_id');
    if($pat_id != null) {
    $lab->patient_id = $pat_id;
    }
    // save it to the database
    $lab->save();

    // redirect to home page
    return redirect('/home');

  }
}
