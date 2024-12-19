@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

<div class="breadcrumb">
    <h1>Hasil Diagnosa | {{ Auth::user()->name }}</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<section class="ul-widget-stat-s1">
    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="ul-widget__row">
                        <div class="ul-widget-stat__font"><i class="fas fa-disease text-danger"></i></div>
                        <div class="ul-widget__content">
                         
                            <p class="m-0">{{ $consultation->disease }}</p>
                            <h4 class="heading">{{ $consultation->score }}%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="timeline-card card">
                <div class="card-body">
                    <div class="mb-1"><strong class="mr-1">Info Penyakit</strong>
                        <p class="text-muted">{{ $consultation->created_at->diffForhumans() }}</p>
                    </div>
                    <p>
                        {!! $consultation->information !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="timeline-card card">
                <div class="card-body">
                    <div class="mb-1"><strong class="mr-1">Saran Dokter</strong>
                        <p class="text-muted">{{ $consultation->created_at->diffForhumans() }}</p>
                    </div>
                    <p>
                        {!! $consultation->suggestion !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separator-breadcrumb border-top mt-5"></div>

@endsection