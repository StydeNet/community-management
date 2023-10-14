@extends('layouts.app')
@section('title', 'Settings')

@section('content')
<div class="main-cont">
    <h1>Settings</h1>
    <nav class="breadcrumbs">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><span>Settings</span></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="tabs">
            @include('admin.partials.tabs')
            <div class="tab-panels">
                <div class="tab-panel tab-panel-active">
                    <div class="card">
                        <header class="card-head">
                            <h2>General settings</h2>
                        </header>

                        <div class="card-cont">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, molestias asperiores similique, error natus quo possimus itaque exercitationem qui mollitia facere quod explicabo inventore quae! Nihil quisquam aperiam delectus non?</p>
                            <form action="{{ route('admin.settings.update') }}" method="post">
                                @csrf
                                <fieldset>
                                    <legend>System variables</legend>

                                    <div class="field">
                                        <label for="website_title">HOA Title</label>
                                        <input type="text" name="website_title" id="website_title" value="{{ $settings->website_title }}">
                                    </div>
                                    <div class="field">
                                        <label for="due_amount_in_cents">Dues amount (cents)</label>
                                        <input type="number" name="due_amount_in_cents" id="due_amount_in_cents" value="{{ $settings->due_amount_in_cents }}">
                                    </div>
                                    <div class="field">
                                        <label for="grace_period_in_days">Invoice grace period (days)</label>
                                        <input type="number" name="grace_period_in_days" id="grace_period_in_days" value="{{ $settings->grace_period_in_days }}">
                                    </div>
                                </fieldset>
                                <div class="field field-submit">
                                    <button type="submit" class="btn btn-cta">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
