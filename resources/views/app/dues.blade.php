@extends('layouts.app')
@section('title', 'Dues')

@section('content')
<div class="main-cont">
    <h1>Dues</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Dues</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>2023</h2>
                <div class="account-balance">
                    <span>Account balance: <strong>$50</strong></span>
                    <p>Funds remaining from a previous overpay</p>
                </div>
            </header>

            <div class="card-cont">
                <table>
                    <thead>
                        <tr>
                            <th>Due</th>
                            <th>Date paid</th>
                            <th>Transaction</th>
                            <th class="td-right">Amount</th>
                            <th class="td-right">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Due:</strong> January</td>
                            <td><strong>Date paid:</strong> 01/07/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237872</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-green">Paid</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Due:</strong> February</td>
                            <td><strong>Date paid:</strong> 02/04/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237886</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-red">Past due</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Due:</strong> March</td>
                            <td><strong>Date paid:</strong> 03/05/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237891</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-yellow">Due</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>2022</h2>
            </header>

            <div class="card-cont">
                <table>
                    <thead>
                        <tr>
                            <th>Due</th>
                            <th>Date paid</th>
                            <th>Transaction</th>
                            <th class="td-right">Amount</th>
                            <th class="td-right">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Due:</strong> January</td>
                            <td><strong>Date paid:</strong> 01/07/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237872</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-green">Paid</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Due:</strong> February</td>
                            <td><strong>Date paid:</strong> 02/04/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237886</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-red">Past due</span>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Due:</strong> March</td>
                            <td><strong>Date paid:</strong> 03/05/2022</td>
                            <td><strong>Transaction:</strong> Check: 0237891</td>
                            <td class="td-right"><strong>Amount:</strong> $150</td>
                            <td class="td-right">
                                <strong>Status:</strong> <span class="badge badge-yellow">Due</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop