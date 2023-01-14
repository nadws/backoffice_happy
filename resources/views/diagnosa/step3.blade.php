<h2 class="font-normal">Parents Evaluation of Development Status </h2>
<!-- Step 2 input fields -->

{{-- <input type="hidden" class="no_order" name="no_order" value="{{ $no_order }}">
<input type="hidden" class="member_id" name="member_id" value="{{ $member_id }}"> --}}
<div class="mt-3">
    <div class="row">
        <div class="col-lg-6">
            <table width="100%">
                <tr>
                    <th>Nama Anak</th>
                    <th>:</th>
                    <td>Budi</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>01-01-2021</td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <th>:</th>
                    <td>12 Bulan</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-6">
            <table width="100%">
                <tr>

                    <th>Nama Orang Tua</th>
                    <th>:</th>
                    <td>Aldi & Wina</td>
                </tr>
                <tr>

                    <th>Tanggal Pemeriksaan </th>
                    <th>:</th>
                    <td>{{ date('d F Y') }}</td>
                </tr>
            </table>



        </div>

        <div class="col-lg-12 ">
            <br>

            <table width="100%">
                @php
                $i = 1;
                $tdk = 1;
                $ya = 1;
                $sdk = 1;
                $ksng = 1;
                @endphp
                @foreach ($peds as $p)
                <tr>
                    <th>{{ $i++ }}.</th>
                    <th>{{ $p->pertanyaan }}</th>
                </tr>
                @if ($p->pilih == 'Y')
                <tr>
                    <td></td>
                    <td>Pilih : <input type="radio" name="pilihan[]{{ $tdk++ }}" id="" value="tidak"> Tidak
                        <input type="radio" name="pilihan[]{{ $ya++ }}" id="" value="ya" checked> Ya <input type="radio"
                            name="pilihan[]{{ $sdk++ }}" id="" value="sedikit"> Sedikit
                    </td>
                </tr>
                @else
                <input type="hidden" name="pilihan[]" id="" value="kosong">
                <input type="hidden" value="{{ $tdk++ }}">
                <input type="hidden" value="{{ $ya++ }}">
                <input type="hidden" value="{{ $sdk++ }}">
                @endif

                <tr>
                    <td></td>
                    <td>Komentar : <input type="text" name="komentar[]" class="form-control" value="Testing" disabled>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <input type="hidden" value="{{ $p->id_pertanyaan }}" name="id_pertanyaan[]">
                @endforeach


            </table>
        </div>
    </div>

</div>
<div class="mt-3">
    <button class="btn btn-primary back2" type="button" step_number="2">Prev</button>
    <button class="btn btn-primary next4" type="button" step_number="4">Next</button>
</div>