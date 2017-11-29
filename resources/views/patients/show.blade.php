@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Patient Info</div>

                <div class="panel-body">
                  <div class="form-group">

                    <table class= "table">
                        <tr><td>
                    MRN: {{$patient-> MRN}} <br>
                    Name:
                    {{$patient-> fname}}
                    {{$patient-> lname}} <br>
                    Date Of Birth:
                    {{$patient-> DOB}}<br>
                    Sex:
                    {{$patient-> sex}}<br>
                    Height
                    {{$patient-> height}}<br>
                    Weight:
                    {{$patient-> weight}}<br>
                    </td><td>
                    Diagnosis:<br>
                    {{$patient-> diagnosis}}<br>
                    Allergies:<br>
                    {{$patient-> allergies}}<br>
                    Physician:
                    {{$patient-> physician}}<br>
                    Code Status:
                    {{$patient-> code_status}}<br>
                    </td></tr><tr><td>
                        Order:
                    </td><td>
                        Lab:
                    </td></tr>
                    </table>
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection