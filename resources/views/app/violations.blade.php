@extends('layouts.app')
@section('title', 'Violations')
@section('pagetype', 'app-violations')

@section('content')
<div class="main-cont">
    <h1>Violations</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><span>Violations</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Violations</h2>
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
                        <p><a href="/violations/1" class="btn">View details</a></p>
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
                        <p><a href="/violations/1" class="btn">View details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
