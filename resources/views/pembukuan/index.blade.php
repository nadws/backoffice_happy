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
                    <a href="{{route('cetak')}}" target="_blank" class="btn icon icon-left btn-primary"
                        style="float: right; margin-right: 5px;"><i class="bi bi-printer"></i>
                        Cetak</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table1">


                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>No Nota</th>
                                <th>Post Akun</th>
                                <th>Keterangan</th>
                                <th style="text-align: right">Debit</th>
                                <th style="text-align: right">Kredit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01-01-2023</td>
                                <td>HK-1001</td>
                                <td>Kas</td>
                                <td>Invoice Screening</td>
                                <td align="right">Rp. 150,000</td>
                                <td align="right">Rp. 0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>02-01-2023</td>
                                <td>HK-1002</td>
                                <td>Bca</td>
                                <td>Invoice Periksa</td>
                                <td align="right">Rp. 150,000</td>
                                <td align="right">Rp. 0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>02-01-2023</td>
                                <td>HK-1003</td>
                                <td>Mandiri</td>
                                <td>Invoice Registrasi</td>
                                <td align="right">Rp. 150,000</td>
                                <td align="right">Rp. 0</td>
                            </tr>
                        </tbody>



                    </table>
                </div>
            </div>
        </section>
    </div>

</div>


@endsection
@section('scripts')

@endsection