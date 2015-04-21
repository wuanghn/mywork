@extends('layouts.frontend.master')
@section('content')

  <div class="container">

  {{Form::open(array('url'=>'users/store-login-mobile'))}}
    <form class="form-signin">
      @if(Session::has('err'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       {{Session::get('err')}}
      </div>
      @endif
      <h2 class="form-signin-heading">Please sign in</h2>
      <input type="hidden" name="url_come" value="{{Request::header('referer')}}">
      <input style="margin-bottom:20px" type="text" name="email" class="form-control" placeholder="Email address">
      <input style="margin-bottom:20px" type="password" name="password" class="form-control" placeholder="Password">
      <button style="margin-bottom:20px" class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>

  </div>
@stop