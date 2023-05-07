@extends('layout.dashboard')
@section('title', $title)
@section('content')
    <div class="container-fluid-full">
        <div class="row-fluid">
            <p>hello dashboard</p>
            @if(session()->exists("user"))
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </div><!--/.fluid-container-->
    </div><!--/fluid-row-->
@endsection
