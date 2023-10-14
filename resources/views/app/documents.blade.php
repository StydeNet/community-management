@extends('layouts.app')
@section('title', 'Documents')

@section('content')
<div class="main-cont">
   <h1>Documents</h1>
   <nav class="breadcrumbs">
       <ul class="breadcrumb-list">
           <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
           <li class="breadcrumb-item"><span>Documents</span></li>
       </ul>
   </nav>

   <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>Statements</h2>
            </header>

            <div class="card-cont">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date paid</th>
                            <th class="td-right">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>September</td>
                            <td>01/07/2022</td>
                            <td class="td-right"><a href="/documents/statements/Statement-09-22.pdf" class="btn" download><i class="icon-file-text"></i> Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   <div class="grid">
        <div class="card">
            <header class="card-head">
                <h2>HOA Documents</h2>
            </header>

            <div class="card-cont">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th class="td-right">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Insurance certificate</td>
                            <td class="td-right"><a href="/documents/statements/Statement-09-22.pdf" class="btn" download><i class="icon-file-text"></i> Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop