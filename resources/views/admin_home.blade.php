@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Administrative Page</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Patients:</h4>
                  <div>
                  <a href='/patients/index'>View all patients</a><br>
                  <a href='/patients/create'>Create New Patient</a><br>
                </div>
                <h4>Orders:</h4>
                  <a href='/orders/index'>View all orders</a><br>
                  <a href='/orders/create'>Create New Order</a><br>
                  <h4>Labs:</h4>
                   <a href='/labs/index'>View all labs</a><br>
                   <a href='labs/create'>Create New Lab</a>

                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
