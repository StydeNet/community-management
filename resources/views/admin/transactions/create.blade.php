@extends('layouts.app')
@section('title', 'Register transaction')

@section('content')
<div class="main-cont">
    <h1>Add transactions</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.transactions.index') }}">Transactions</a></li>
            <li class="breadcrumb-item"><span>Add</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Register a transaction</h2>
                        <a href="{{ route('admin.transactions.index') }}" class="btn">Back</a>
                    </header>
        
                    <div class="card-cont">
                        <form method="POST" action="{{ route('admin.transactions.store') }}">
                            @csrf
                            <fieldset>
                                <legend>Transaction details</legend>
                                <div class="field">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" value="{{ now()->format('Y-m-d') }}" required>
        
                                    @error('date')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="amount">Amount</label>
                                        <input type="number" name="amount" id="amount" step="0.01" required>
        
                                        @error('amount')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <label for="transaction_number">Transaction number</label>
                                        <input type="text" name="transaction_number" id="transaction_number" placeholder="Check or Transfer number" required>
                                        @error('transaction_number')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field-group">
                                    <div class="field">
                                        <label for="type">Transaction type</label>
                                        <select name="type" id="type">
                                            @foreach($types as $type)
                                                <option value="{{ $type->value }}" @selected(old('type') == $type->value) required>{{ $type->title() }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <p class="alert alert-error">{{ $message }}</p>
                                        @enderror
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
