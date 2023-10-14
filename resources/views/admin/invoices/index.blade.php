@extends('layouts.app')
@section('title', 'Invoices')

@section('content')
<div class="main-cont">
    <h1>Invoices</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Invoices</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Recent invoices</h2>
                        <a href="{{ route('admin.invoices.create') }}" class="btn btn-cta">Register new invoice</a>
                    </header>

                    <div class="card-cont">
                        @unless($invoices->isEmpty())
                            <table>
                                <thead>
                                    <tr>
                                        <th class="td-date">Due at</th>
                                        <th class="td-number">Amount</th>
                                        <th class="td-number">Unit</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $invoice)
                                    <tr>
                                        <th class="td-date">{{ $invoice->due_at->format('m/d/Y') }}</th>
                                        <td class="td-number">${{ $invoice->amount_in_dollars }}</td>
                                        <td class="td-number">{{ $invoice->unit->title }}</td>
                                        <td>{{ $invoice->description }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="no-records">There are no invoices at the moment.</p>
                        @endunless
                        <br>
                        <h2>Create montly invoice for all units</h2>
                        <p>Use this button to create invoices for all units for the current month.</p>
                        <form method="POST" action="{{ route('admin.invoices.batch') }}">
                            @csrf
                            <fieldset>
                                <legend>All units</legend>
                                <div class="field">
                                    <label for="due_at">Due at</label>
                                    <input type="date" name="due_at" id="due_at" value="{{ old('due_at', now()->format('Y-m-d')) }}" required>

                                    @error('due_at')
                                        <p class="alert alert-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-cta">Generate all units invoice</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
