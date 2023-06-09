@extends('layout.public')
@section('title', $title)
@section('content')
<div class="container-fluid-full">
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="index.html"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Masukkan username dan password</h2>
                <form class="form-horizontal" action="/login" method="post">
                    @csrf
                    <div class="input-prepend" title="Username">
                        <span class="add-on"><i class="halflings-icon user"></i></span>
                        <input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend" title="Password">
                        <span class="add-on"><i class="halflings-icon lock"></i></span>
                        <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
                    </div>

                    <div class="button-login">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                <hr>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.fluid-container-->
</div><!--/fluid-row-->
@if(isset($error))
    <script>window.alert('{{$error}}');window.history.back();</script>
@endif
@endsection
