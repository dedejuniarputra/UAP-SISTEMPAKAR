@extends('layouts.backend.app')

@section('title', 'Users | Dashboard')

@section('content')
    
    <!-- ============ Body content start ============= -->
<div class="breadcrumb">
    <h1>Dashboard</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<!-- end of row-->
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Hasil Konsultasi Saudara {{ Auth::user()->name }}</h4>
                
                <div class="table-responsive mt-4">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Penyakit</th>
                                <th>Nilai</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultations as $consultation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $consultation->user->name }}</td>
                                    <td>{{ $consultation->disease }}</td>
                                    <td>{{ $consultation->score }}%</td>
                                    <td>{{ $consultation->created_at }}</td>
                                    <td>
                                        <a href="/users/consultations/{{ $consultation->id }}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fab fa-readme"> Detail</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Penyakit</th>
                                <th>Nilai</th>
                                <th>Tanggal Konsultasi</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end of col-->
</div>
<!-- end of row-->

@endsection