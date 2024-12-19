@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
<div class="breadcrumb">
    <h1>Data Rule | </h1>
    <a href="/admin/rules/create" class="btn btn-primary btn-sm">Create</a>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Data Ruke</h4>
                <p>Sistem pakar diagnosa penyakit ginjal</p>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th>Probabilitas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($rules as $rule)
                            <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rule->disease->name }}</td>
                                    <td>{{ $rule->symptom->symptom }}</td>
                                    <td>{{ number_format($rule->probability, 2) }}</td>
                                    <td>

                                        <a href="/admin/rules/{{ $rule->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <form action="/admin/rules/{{ $rule->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Data Rule akan terhapus')">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th>Probabilitas</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/datatables.script.min.js"></script>
@endpush