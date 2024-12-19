@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

<div class="breadcrumb">
    <h1>Hasil Diagnosa</h1>
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
                            @foreach ($diagnosisMax as $diagnosaMax)
                            <p class="m-0">{{ $diagnosaMax->name }}</p>
                            <h4 class="heading">{{ floor($diagnosaMax->results * 100) }}%</h4>
                            @endforeach
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
                        <p class="text-muted">{{ $diagnosaMax->created_at }}</p>
                    </div>
                    <p>
                        {!! $diagnosaMax->information !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="timeline-card card">
                <div class="card-body">
                    <div class="mb-1"><strong class="mr-1">Saran Dokter</strong>
                        <p class="text-muted">{{ $diagnosaMax->created_at }}</p>
                    </div>
                    <p>
                        {!! $diagnosaMax->suggestion !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separator-breadcrumb border-top mt-5"></div>

<!-- end of row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Hasil Perhitungan</h4>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Penyakit</th>
                                <th>Hasil Probabilitas</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($diagnosis as $diagnosa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $diagnosa->code }}</td>
                                    <td>{{ $diagnosa->name }}</td>
                                    <td>{{ floor($diagnosa->results * 100) }}%</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Penyakit</th>
                                <th>Hasil Probabilitas</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end of col-->
</div>
@endsection