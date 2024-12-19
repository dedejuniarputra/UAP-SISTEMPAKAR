@extends('layouts.backend.app')

@section('title', 'Users | Dashboard')

@section('content')
    
    <!-- ============ Body content start ============= -->
<div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">User</a></li>
        <li>Dashboard</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-12">
        <!-- CARD ICON-->
        <div class="row">
            <div class="col-sm-3">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-users text-primary" style="font-size: 30px;"></i>
                        <p class="text-muted mt-2 mb-2">Consultations</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $consultations->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        Halo <code>{{ Auth::user()->name }}</code>, Selamat datang dilaboratoruim diagnosa penyakit ginjal!
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h5>Berikut adalah langkah-langkah untuk mengelola <code>dashboard</code> :</h5>
                            
                            <h6>1. Halaman <code>dashboard</code>, memberitahuakn bahwa <code>{{ Auth::user()->name }}</code>, sudah melakukan <code>{{ $consultations->count() }}</code> diagnosa didalam lab ini. </h6>
                            <h6>2. Untuk melakukan diagnosa penyakit ginjal terdapat dimenu <code>Diagnosis</code> dan bisa dipilih gejala yang anda rasakan.</h6>
                            <h6>3. Data hasil konsultasi anda akan tersimpan dengan aman dan bisa diakses kapanpun dan dimanapun.</h6>
                            <h6>4. Untuk melihat hasil konsultasi terdapat dimenu <code>Consultations</code> lihat detail sesuai tanggal konsultasi anda.</h6>
                            <h6>5. Untuk melakukan perubahan ketika terjadinya kesalahan dalam penulisan data diri ada bisa di klik <code>Settings -> Profile</code></h6>
                            <h6>6. Untuk melakukan perubahan password anda bisa klik <code>Settings -> Password</code></h6>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection