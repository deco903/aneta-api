@extends('auth.app')
@section('content')

 @guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-info" href="{{ route('register') }}">Register</a>
 @endguest

 <div class="links">
   <strong>Database Connected: </strong>
    @php
        try {
            DB::connection()->getPDO();
            echo DB::connection()->getDatabaseName();
            } catch (\Exception $e) {
            echo 'None';
        }
    @endphp
</div>

@endsection
