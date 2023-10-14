@extends('layouts.auth')
@section('title', 'Dashboard')
@section('pagetype', 'page-login')

@section('content')
<div class="main-cont main-login">
    <div class="login-box">
        <div class="grid">
            <div class="card">
                <header class="card-head">
                    <h1>Verify email</h1>
                </header>
                <div class="card-cont">
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-good">
                            A new verification link has been sent to the email address you provided during registration.
                        </div>
                    @endif
                    @if ($errors->any())
                        @include('components.form-errors')
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div class="field field-submit">
                            <button type="submit" class="btn">Resend Verification Email</button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
