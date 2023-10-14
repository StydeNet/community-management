@extends('layouts.app')
@section('title', 'Documents')

@section('content')
<div class="main-cont">
    <h1>Users</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Users</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="card">
                    <header class="card-head">
                        <h2>Current active users</h2>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-cta">Add new</a>
                    </header>

                    <div class="card-cont">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Unit</th>
                                    <th class="td-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{ $user->name }}</th>
                                    <td>{{ $user->role }}</td>
                                    <td>123</td>
                                    <td class="td-right"><a href="{{ route('admin.users.edit', $user->id) }}" class="btn"><i class="icon-edit"></i> Edit</a></td>
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
