@extends('theme.app')
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{ $title }}</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    {{-- <a href="{{route('cetak')}}" target="_blank" class="btn icon icon-left btn-primary"
                        style="float: right; margin-right: 5px;"><i class="bi bi-printer"></i>
                        Cetak</a> --}}
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Member ID</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Pasien</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dt_pasien as $no => $p)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{ $p->member_id }}</td>
                                <td>{{ date('d-m-Y',strtotime($p->tgl_lahir)) }}</td>
                                <td>{{ $p->nama_pasien }}</td>
                                <td>{{ $p->no_hp }}</td>
                                <td>
                                    <a href="{{route('view')}}" class="btn btn-sm icon btn-primary klik_view">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm icon btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#view">
                                        <i class=" fas fa-comment-medical"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

</div>
<div class="modal fade text-left" id="view" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">
                    Detail Diagnosa
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Diagnosa</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Pertumbuhan kurang perlu tindakan .... </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Keterlamabatan dalam berbicara kemungkinan disebabkan ....</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection
@section('scripts')

@endsection