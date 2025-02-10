@extends('layout.main_layout')

@section('content')
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="card p-5">
                
                <!-- logo -->
                <div class="text-center p-3">
                    <img src="assets/images/logo.png" alt="Notes logo">
                </div>

                <!-- form -->
                <div class="row justify-content-center">
                    <div class="col-md-10 col-12">
                        <form action="/loginSubmit" method="post" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control bg-dark text-info" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control bg-dark text-info" name="password" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-secondary w-100">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- copy -->
                <div class="text-center text-secondary mt-3">
                    <small>&copy; {{ date('Y') }} Notes</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
