@extends('layouts.auth')
@section('title', 'Dashboard')
@section('pagetype', 'page-login')

@section('content')
<div class="main-cont main-login">
    <div class="login-box">
        <div class="grid">
            <div class="card">
                <header class="card-head">
                    <h1>Sign in</h1>
                </header>
                <div class="card-cont">
                    @if ($errors->any())
                        @include('components.form-errors')
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label htmlFor="email">Your email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required/>
                        </div>
                        <div class="field">
                            <label htmlFor="password">Your password</label>
                            <input type="password" id="password" value="" name="password" required/>
                        </div>
                        <div class="field-submit">
                            <button type="submit" class="btn btn-cta">Sign in</button>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
