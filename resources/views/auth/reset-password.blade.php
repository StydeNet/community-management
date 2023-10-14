@extends('layouts.auth')
@section('title', 'Dashboard')
@section('pagetype', 'page-login')

@section('content')
<div class="main-cont main-login">
    <div class="login-box">
        <div class="grid">
            <div class="card">
                <header class="card-head">
                    <h1>Reset password</h1>
                </header>
                <div class="card-cont">
                    @if ($errors->any())
                        @include('components.form-errors')
                    @endif
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label htmlFor="email">Your email</label>
                            <input type="email" id="email" name="email" required/>
                        </div>
                        <div class="field">
                            <label htmlFor="password">Your password</label>
                            <input type="password" id="password" name="password" required/>
                        </div>
                        <div class="field">
                            <label htmlFor="password">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required/>
                        </div>
                        <div class="field-submit">
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <button type="submit" class="btn btn-cta">Reset password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
