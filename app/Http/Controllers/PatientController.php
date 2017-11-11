<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function store(Request $request) {

      // create a new patient using the form data
      $patient = new \App\Patient;
      $patient->MRN = request('MRN');
      $patient->fname = request('fname');
      $patient->lname = request('lname');
      $patient->DOB = request('DOB');
      $patient->sex = request('sex');
      $patient->height = request('height');
      $patient->weight = request('weight');
      $patient->diagnosis = request('diagnosis');
      $patient->allergies = request('allergies');
      $patient->physician = request('physician');
      $patient->code_status = request('code_status');

      // save it to the database
      $patient->save();

      // redirect to home page
      return redirect('/');

    }

}
