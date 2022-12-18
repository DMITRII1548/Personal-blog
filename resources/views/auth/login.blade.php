@extends('layouts.main')

@section('content')
    <main class="main-form-register">
        <div class="container">
            <form action="{{ route('auth.login') }}" method="POST" class="form-register">
                @csrf
                @method('post')
                <label for="name">name:
                <input type="text" name="name" placeholder="your name" id="name" required></label>

                <label for="email">email:
                <input type="email" name="email" placeholder="email" id="email" required></label>

                <label for="password">password:
                <input type="password" name="password" placeholder="password" id="password" required></label>

                <button type="submit" class="register-button">
                    Sign in
                </button>
            </form>
        </div>
    </main>
@endsection

