@extends('layouts.app')
@section('title', 'Create invoice')

@section('content')
<div class="main-cont">
    <h1>Add invoice</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.invoices.index') }}">Invoices</a></li>
            <li class="breadcrumb-item"><span>Add</span></li>
         </ul>
   </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Create invoice</h2>
                        <a href="{{ route('admin.invoices.index') }}" class="btn">Back</a>
                    </header>

                    <div class="card-cont">
                        <form method="POST" action="{{ route('admin.invoices.store') }}">
                            @csrf
                            <fieldset>
                                <legend>Invoice details</legend>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="due_at">Due at</label>
                                        <input type="date" name="due_at" id="due_at" value="{{ old('due_at', now()->format('Y-m-d')) }}" required>

                                        @error('due_at')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="amount_in_cents">Amount (in cents)</label>
                                        <input type="number" name="amount_in_cents" id="amount_in_cents" step="100" value="{{ old('amount_in_cents') }}" required>

                                        @error('amount_in_cents')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="unit_id">Select unit</label>
                                    <select name="unit_id" id="unit_id">
                                        @foreach($units as $unit)
                                            <option value="{{ $unit->id }}" @selected(old('unit_id') === $unit->id) required>{{ $unit->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('unit_id')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
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
