@extends('auth.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>email<span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyDrS3wsr3u6nPEH9bWhpiwoOtQDQ6TUpIM",
        authDomain: "http://localhost:8000/login",
        databaseURL: "http://localhost:8000/",
        projectId: "aneta-9eeab",
        storageBucket: "AIzaSyDrS3wsr3u6nPEH9bWhpiwoOtQDQ6TUpIM",
        messagingSenderId: "392724653317",        
        appId: "1:392724653317:web:1835775102c96723d9036c"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
   console.log(messaging.getToken())
    
</script>

@endsection
