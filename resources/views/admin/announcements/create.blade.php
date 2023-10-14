@extends('layouts.app')
@section('title', 'Announcements')

@section('content')
<div class="main-cont">
    <h1>Announcements</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('announcements') }}">Announcements</a></li>
            <li class="breadcrumb-item"><span>Add</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Create announcement</h2>
                <a href="{{ route('announcements') }}" class="btn btn-cta">Back</a>
            </header>

            <div class="card-cont">
                <form method="POST" action="">
                    <fieldset>
                        <legend>Announcement details</legend>
                        <div class="field-group">
                            <div class="field">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" required>
                            </div>
                            <div class="field">
                                <div class="field field-checkbox">
                                    <label>Important</label>
                                    <ul class="checkbox-list">
                                        <li>
                                            <label for="unit_occupancy">
                                                <input type="checkbox" name="unit_occupancy" id="unit_occupancy" value="Yes"> Mark this announcement as important
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label for="description">Content</label>
                            <textarea name="description" id="description" required></textarea>
                        </div>
                        <div class="field field-submit">
                            <button type="submit" class="btn btn-cta">Save</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
