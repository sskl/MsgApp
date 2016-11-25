@extends('layouts.app')

@section('header')
    <nav>
        <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="{{ url('/') }}">Home</a></li>
            <li role="presentation"><a href="{{ url('/about') }}">About</a></li>
            <li role="presentation"><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
@stop

@section('sidebar-up')
    <h1>MsgApp</h1>
    <p class="lead">If you want send someone a message please register our system.</p>
    <p><a class="btn btn-lg btn-success" href="{{ url('/register') }}" role="button">Sign up today</a></p>
@stop

@section('sidebar-left')
    <h4>Today's Messages</h4>
    <p>Dude! What's up :) </p>

    <h4>Populer Messages</h4>
    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

    <h4>Testing</h4>
    <p>Test area.</p>
@stop
@section('sidebar-right')
    <div class="col-md-11 text-center">
        <h4><i class='glyphicon glyphicon-user'></i> Login Screen</h4>

    </div>
    <div class="alert-info">
      @if (Auth::guest())
        <form class="form-horizontal" role="form" method="POST" action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </div>
        </form>
        <br />
      @else

        <div>
            Welcome,  {{ Auth::user()->name }} <span class="caret"></span>
        </div>
          <div>
              <ul>
                  <li>
                      <a href="{{ url('/logout') }}"
                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </div>
        @endif
    </div>
@stop
@section('footer')
    <p>&copy; 2016 MsgApp {{ url('/') }}</p>
@stop