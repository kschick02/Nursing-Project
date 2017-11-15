@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is the admin page!
                  </br>
                    <a href='patients/create'>Create new patient</a></br>
                   <a href='#'>Create new order</a></br>
                   <a href='lab/create2'>Create new lab</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
