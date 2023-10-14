@extends('layouts.app')
@section('title', 'Create / Edit users')

@section('content')
<div class="main-cont">
    <h1>Add user</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
            <li class="breadcrumb-item"><span>Add</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Create a user</h2>
                        <a href="{{ route('admin.users.index') }}" class="btn">Back</a>
                    </header>

                    <div class="card-cont">
                        <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <legend>User details</legend>
                                <div class="field">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>

                                    @error('name')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>

                                    @error('email')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" required>

                                        @error('password')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="password_confirmation">Repeat password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                                        @error('password_confirmation')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field field-optionset">
                                    <label>Role</label>
                                    <ul class="optionset">
                                    @foreach($roles as $role)
                                        <li role="option">
                                            <label for="{{ $role->value }}">
                                                <input type="radio" name="role" id="{{ $role->value }}" value="{{ $role->value }}" checked> {{ $role->title() }}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="field field-file">
                                    <label for="avatar">User avatar</label>
                                    <input type="file" name="avatar" id="avatar">
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Unit details</legend>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="unit_id">Select unit</label>
                                        <select name="unit_id" id="unit_id" required>
                                            @foreach($units as $unit)
                                                <option value="{{ $unit->id }}" @selected(old('unit_id') === $unit->id)>{{ $unit->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('unit_id')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field field-optionset">
                                        <label>Relation to unit</label>
                                        <ul class="optionset">
                                        @foreach($unitRelationshipTypes as $type)
                                            <li role="option">
                                                <label for="{{ $type->value }}">
                                                    <input type="radio" name="unit_relationship_type" id="{{ $type->value }}" value="{{ $type->value }}">
                                                    {{ $type->title() }}
                                                </label>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="field field-checkbox">
                                    <label>Occupancy</label>
                                    <ul class="checkbox-list">
                                        <li>
                                            <label for="unit_occupancy">
                                                <input type="checkbox" name="unit_occupancy" id="unit_occupancy" value="Yes"> Does this user live in this unit?
                                            </label>
                                        </li>
                                    </ul>
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
    </div>
</div>
@stop
