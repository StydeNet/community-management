@extends('layouts.app')
@section('title', 'Units')

@section('content')
<div class="main-cont">
    <h1>Units</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Units</span></li>
        </ul>
    </nav>

   <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Current units</h2>
                        <a href="{{ route('admin.units.create') }}" class="btn btn-cta">Add new</a>
                    </header>

                    <div class="card-cont">
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Address</th>
                                    <th>Owner</th>
                                    <th class="td-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($units as $unit)
                                <tr>
                                    <th>{{ $unit->title }}</th>
                                    <td>{{ $unit->address_1 }}</td>
                                    <td>John Doe</td>
                                    <td class="td-right"><a href="{{ route('admin.units.edit', $unit) }}" class="btn"><i class="icon-edit"></i> Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
