@extends('layouts.main')

@section('title', 'Logowanie')
@section('description', 'Zaloguj sie do kalkulatora')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Logowanie do kalkulatora</h3>
                </div>
                <div class="card-body">
                    
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label">Login:</label>
                            <input type="text" name="login" id="login" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="haslo" class="form-label">Hasło:</label>
                            <input type="password" name="haslo" id="haslo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn custom-btn">Zaloguj</button>
                        <a href="/" class="btn custom-btn custom-border-btn custom-btn-bg-red smoothscroll me-2 mb-2">Powrót</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection