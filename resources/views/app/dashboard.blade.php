@extends('layouts.app')
@section('title', 'Dashboard')
@section('pagetype', 'app-dashboard')

@section('content')
<div class="main-cont">
    <h1>Dashboard</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><span>Home</span></li>
        </ul>
    </nav>

    <div class="grid lg-3 md-3">
        <div class="card">
            <header class="card-head">
                <h2>Balance</h2>
                <i class="card-icon icon-dollar-sign"></i>
            </header>
            <div class="card-cont">
                <p><span class="balance balance-due">Due: $150</span></p>
                <p><a href="{{ route('dues') }}">Review</a></p>
            </div>
        </div>

        <div class="card">
            <header class="card-head">
                <h2>Requests</h2>
                <i class="card-icon icon-alert-triangle"></i>
            </header>
            <div class="card-cont">
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p><a href="{{ route('maintenance') }}">View requests</a></p>
            </div>
        </div>
        <div class="card">
            <header class="card-head">
                <h2>Violations</h2>
                <i class="card-icon icon-alert-octagon"></i>
            </header>
            <div class="card-cont">
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <p><a href="{{ route('violations') }}">View violations</a></p>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Announcements</h2>
            </header>
            <div class="card-cont">
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>New website launched</h3>
                        <span class="badge badge-red">Important</span>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                    </div>
                </div>
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>New website launched</h3>
                        <span class="badge badge-red">Important</span>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
