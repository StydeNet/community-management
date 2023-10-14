@extends('layouts.app')
@section('title', 'Create / Edit Units')

@section('content')
<div class="main-cont">
    @if ($unit->exists)
        <h1>Edit unit - {{ $unit->title }}</h1>
    @else
        <h1>Add unit</h1>
   @endif

   @breadcrumbs

   <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>{{ $unit->exists ? 'Edit unit' : 'Create unit' }}</h2>
                        <a href="{{ route('admin.units.index') }}" class="btn">Back</a>
                    </header>
        
                    <div class="card-cont">
                        <form method="POST" action="{{ route('admin.units.store') }}">
                            @csrf
                            <fieldset>
                                <legend>Property details</legend>
                                <div class="field">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" value="{{ $unit->title }}" required>
                                    @error('title')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="address_1">Address 1</label>
                                    <input type="text" name="address_1" id="address_1" value="{{ $unit->address_1 }}" required>
                                    @error('address_1')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="address_1">Address 2</label>
                                    <input type="text" name="address_2" id="address_2" value="{{ $unit->address_2 }}">
                                </div>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" value="{{ $unit->city }}" required>
                                        @error('city')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field field-small">
                                        <label for="state">State</label>
                                        <input type="text" name="state" id="state" value="{{ $unit->state }}" required>
                                        @error('state')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="postcode">Postcode</label>
                                        <input type="text" name="postcode" id="postcode" value="{{ $unit->postcode }}" required>
                                        @error('postcode')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field-file-wrap">
                                    @if($unit)
                                        @if($unit->image)
                                        <img src="/images/unit/{{ $unit->image }}" alt="{{ $unit->title }}">
                                        @endif
                                    @endif
                                    <div class="field field-file">
                                        <label for="image">Image upload</label>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                            </fieldset>
        
                            <fieldset>
                                <legend>Unit users</legend>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th width="100" class="td-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Owner</td>
                                            <td class="td-right"><button class="btn-remove-item" aria-label="Remove item"><i class="icon-trash-2"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Renter</td>
                                            <td class="td-right"><button class="btn-remove-item" aria-label="Remove item"><i class="icon-trash-2"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="field-repeatable" id="repeat_1">
                                    <div class="field-group" id="field_group_1">
                                        <div class="field">
                                            <label for="user">Select user</label>
                                            <select name="user" id="user">
                                                <option>Select user</option>
                                                <option value="2501">2501</option>
                                            </select>
                                        </div>
                                        <div class="field field-optionset">
                                            <label>Type of user</label>
                                            <ul class="optionset">
                                                <li role="option">
                                                    <label for="owner">
                                                        <input type="radio" name="user_type" id="owner" value="owner"> Owner
                                                    </label>
                                                </li>
                                                <li role="option">
                                                    <label for="renter">
                                                        <input type="radio" name="user_type" id="renter" value="renter"> Renter
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="field-small txt-r">
                                            <button type="button" class="btn-add-item" aria-label="Add item"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
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
