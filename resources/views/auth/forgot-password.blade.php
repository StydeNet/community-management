@extends('layouts.auth')
@section('title', 'Dashboard')
@section('pagetype', 'page-login')

@section('content')
<div class="main-cont main-login">
    <div class="login-box">
        <div class="grid">
            <div class="card">
                <header class="card-head">
                    <h1>Forgotten password</h1>
                </header>
                <div class="card-cont">
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    @if ($errors->any())
                        @include('components.form-errors')
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf

                        <div class="field">
                            <label htmlFor="email">Your email</label>
                            <input type="email" id="email" name="email" required/>
                        </div>
                        <div class="field-submit">
                            <button type="submit" class="btn btn-cta">Email Password Reset Link</button>

                            <a href="{{ route('login') }}">Back to login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
