@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Admin Page</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Patients:</h4>
                  <div>
                  <a href='/patients/index'>View all patients</a><br>
                  <a href='/patients/create'>Create new patient</a><br>
                </div>
                <h4>Orders:</h4>
                  <a href='/orders/create'>Create new order</a><br>
                  <h4>Labs:</h4>
                   <a href='lab/create2'>Create new lab</a>

                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
