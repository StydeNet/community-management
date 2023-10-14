@extends('layouts.app')
@section('title', 'Transactions')

@section('content')
<div class="main-cont">
   <h1>Transactions</h1>
   <nav class="breadcrumbs">
       <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Transactions</span></li>
       </ul>
   </nav>

   <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Recent transactions</h2>
                        <a href="{{ route('admin.transactions.create') }}" class="btn btn-cta">Register new transaction</a>
                    </header>

                    <div class="card-cont">
                        @unless($transactions->isEmpty())
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Unit</th>
                                        <th>Type</th>
                                        <th class="td-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <th>{{ $transaction->date->format('m/d/Y') }}</th>
                                        <td>{{ $transaction->transaction_number }}</td>
                                        <td>${{ $transaction->amount_in_dollars }}</td>
                                        <td>{{ $transaction->unit->title }}</td>
                                        <td>{{ $transaction->type->title() }}</td>
                                        <td class="td-right"><a href="/users/edit" class="btn"><i class="icon-edit"></i> Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="no-records">There are no transactions at the moment.</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
