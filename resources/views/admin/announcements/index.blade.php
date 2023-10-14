@extends('layouts.app')
@section('title', 'Announcements')

@section('content')
<div class="main-cont">
    <h1>Announcements</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Announcements</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Recent announcements</h2>
                <a href="/admin/announcements/create" class="btn btn-cta">Create</a>
            </header>

            <div class="card-cont">
               <table>
                    <thead>
                        <tr>
                            <th class="td-date">Date</th>
                            <th>Title</th>
                            <th>Level</th>
                            <th class="td-actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="td-date">01/02/2023</th>
                            <td>Insurance certificate</td>
                            <td></td>
                            <td class="td-actions"><a href="/admin/announcements/create" class="btn-action"><i class="icon-edit"></i></a> <a href="#" class="btn-action"><i class="icon-trash-2"></i></a></td>
                        </tr>
                        <tr>
                            <th class="td-date">01/06/2023</th>
                            <td>January statement</td>
                            <td><span class="badge badge-red">Important</span></td>
                            <td class="td-actions"><a href="/admin/announcements/create" class="btn-action"><i class="icon-edit"></i></a> <a href="#" class="btn-action"><i class="icon-trash-2"></i></a></td>
                        </tr>
                        <tr>
                            <th class="td-date">01/02/2023</th>
                            <td>Insurance certificate</td>
                            <td></td>
                            <td class="td-actions"><a href="/admin/announcements/create" class="btn-action"><i class="icon-edit"></i></a> <a href="#" class="btn-action"><i class="icon-trash-2"></i></a></td>
                        </tr>
                        <tr>
                            <th class="td-date">01/02/2023</th>
                            <td>Insurance certificate</td>
                            <td></td>
                            <td class="td-actions"><a href="/admin/announcements/create" class="btn-action"><i class="icon-edit"></i></a> <a href="#" class="btn-action"><i class="icon-trash-2"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
