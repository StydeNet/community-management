@extends('layouts.app')
@section('title', 'Request #')

@section('content')
<div class="main-cont">
    <h1>Violation #{{ $id }}</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/violations">Violations</a></li>
            <li class="breadcrumb-item"><span>Violation #1</span></li>
        </ul>
    </nav>

    <div class="grid lg-66-33 md-66-33">
        <div class="card">
            <header class="card-head">
                <h2>Title of violation</h2>
                <i class="card-icon icon-alert-triangle"></i>
            </header>
            <div class="card-cont">
                <time>Opened: Oct 21 2022, 03:22pm</time>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas corporis architecto iure temporibus, totam dolorem quaerat. Eligendi quas odit voluptatibus officia harum, commodi ea perferendis culpa consectetur amet saepe quibusdam!</p>
            </div>
        </div>
        <div class="card">
            <div class="card-cont">
                <img src="/images/unit/house.jpg" alt="text">
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Updates</h2>
            </header>
            <div class="card-cont">
                <div class="comment">
                    <h3>Author</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    <p class="comment-meta">10/25/2022 3:58pm</p>
                </div>
                <div class="comment">
                    <h3 class="author-admin">Admin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    <p class="comment-meta">10/25/2022 3:58pm</p>
                </div>
                <div class="comment">
                    <h3>Author</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    <p class="comment-meta">10/25/2022 3:58pm</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Submit an update</h2>
            </header>
            <div class="card-cont">
                <form>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea cols="30" rows="6" name="message" id="message"></textarea>
                    </div>
                    <div class="field field-checkbox">
                        <label>Mark as completed</label>
                        <ul class="checkbox-list">    
                            <li>
                                <label for="completed">
                                    <input type="checkbox" name="completed" id="completed" value="Yes"> I'm satisfied with the outcome of this request.
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="field-submit">
                        <button type="submit" class="btn btn-cta">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop