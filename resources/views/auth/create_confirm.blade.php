@extends('layouts.main')

@section('content')
    <main class="main-form-register">
        <div class="container">
            <form action="{{ route('auth.register.store') }}" method="POST" class="form-register">
                @csrf
                @method('post')

                <label for="code">Confirm code sended to your email <br>
                    Check in your folder with spam:
                    <input type="text" id="code" name="code" placeholder="code" required>
                </label>

                <input type="text" name="hashed_code" class="display-none" value="{{ $hashedCode }}">
                <input type="text" name="name" placeholder="your name" class="display-none" value="{{ $data['name'] }}">

                <input type="email" name="email" placeholder="email" class="display-none" value="{{ $data['email'] }}">

                <input type="password" name="password" placeholder="password" class="display-none" value="{{ $data['password'] }}">

                <button type="submit" class="register-button">
                    Send
                </button>
            </form>
        </div>
    </main>
@endsection

