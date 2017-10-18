@extends('layouts.app')

@section('contenedor')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                  Logout
                </a>
             <form id="logout-form" 
                    action="{{ url('/logout') }}" 
                method="POST" 
                style="display: none;">
                            {{ csrf_field() }}
              </form>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
