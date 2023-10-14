@extends('layouts.app')
@section('title', 'Maintenance')

@section('content')
<div class="main-cont">
    <h1>Maintenance</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Maintenance</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Open requests</h2>
            </header>
            <div class="card-cont">
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>Tree branch broken above the unit</h3>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                        <p><a href="{{ route('request', 1) }}" class="btn">View details</a></p>
                    </div>
                </div>
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>Leaking gutters</h3>
                        <span class="badge badge-red">Urgent</span>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                        <p><a href="{{ route('request', 1) }}" class="btn">View details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Make new request</h2>
            </header>
            <div class="card-cont">
                <p>Please describe the issue in detail and include a picture if possible.</p>
                <form action="#" method="post">
                    @csrf
                    <fieldset>
                        <legend>Request details</legend>
                        <div class="field">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" rows="10" columns="24">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="alert alert-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="date">When did this issue appear?</label>
                            <input type="date" name="date" id="date" value="{{ old('date', now()->format('Y-m-d')) }}" required>

                            @error('date')
                                <p class="alert alert-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field field-file">
                            <label for="image">Photo of the issue</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="field field-checkbox">
                            <label>Urgency</label>
                            <ul class="checkbox-list">    
                                <li>
                                    <label for="urgent">
                                        <input type="checkbox" name="urgent" id="urgent" value="Yes"> Is this an urgent request that requires immediate attention?
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                    <div class="field field-submit">
                        <button type="submit" class="btn btn-cta">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Closed requests</h2>
            </header>
            <div class="card-cont">
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>New website launched</h3>
                        <span class="badge badge-green">Completed</span>
                    </header>
                    <div class="announcement-cont">
                        <time>Oct 21 2022, 03:22pm</time>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
                    </div>
                </div>
                <div class="announcement">
                    <header class="announcement-head">
                        <h3>New website launched</h3>
                        <span class="badge badge-green">Completed</span>
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