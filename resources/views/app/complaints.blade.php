@extends('layouts.app')
@section('title', 'Complaints')
@section('pagetype', 'app-complaints')

@section('content')
<div class="main-cont">
    <h1>Complaints</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><span>Complaints</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Your filed complaints</h2>
            </header>
            <div class="card-cont">
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>Dog loose on 2502</h3>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                        <p><a href="/complaints/1" class="btn">View details</a></p>
                    </div>
                </div>
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>Icy driveway</h3>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                        <p><a href="/complaints/1" class="btn">View details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
