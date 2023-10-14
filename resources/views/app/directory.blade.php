@extends('layouts.app')
@section('title', 'Directory')

@section('content')
<div class="main-cont">
    <h1>Directory</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><span>Directory</span></li>
        </ul>
    </nav>

    <div class="grid lg-2 md-2">
        <div class="card">
            <header class="card-head">
                <h2>President</h2>
            </header>
            <div class="card-cont">
                <h3>John Doe</h3>
                <p>1234 Street</p>
                <p>555-123-4567</p>
                <p><a href="">email@domain.com</a></p>
            </div>
        </div>
        <div class="card">
            <header class="card-head">
                <h2>HOA Treasurer</h2>
            </header>
            <div class="card-cont">
                <h3>John Doe</h3>
                <p>1234 Street</p>
                <p>555-123-4567</p>
                <p><a href="">email@domain.com</a></p>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Other contacts</h2>
            </header>
            <div class="card-cont">
                <h3>Insurance</h3>
                <p>123 Street Name, City</p>
                <p>555-123-4567</p>
                <p><a href="" target="_blank">Website</a></p>
                <hr/>
                <h3>Trash Disposal</h3>
                <p>123 Street Name, City</p>
                <p>555-123-4567</p>
                <p><a href="">Website</a></p>
                <hr/>
                <h3>Bank - Huntington Bank</h3>
                <p>123 Street Name, City</p>
                <p>555-123-4567</p>
                <p><a href="" target="_blank">Website</a></p>
            </div>
        </div>
    </div>
</div>
@stop