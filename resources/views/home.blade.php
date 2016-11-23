@extends('master')

@section('header')
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">About</a></li>
      <li role="presentation"><a href="#">Contact</a></li>
    </ul>
  </nav>
@stop

@section('sidebar-up')
  <h1>MsgApp</h1>
  <p class="lead">If you want send someone a message please register our system.</p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
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
  <h4>This is sidebar</h4>
  <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

  <h4>What's new?</h4>
  <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

  <h4>23 October 2018</h4>
  <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
@stop
@section('footer')
  <p>&copy; 2016 MsgApp </p>
@stop