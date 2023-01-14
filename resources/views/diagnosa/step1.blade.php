<h2 class="font-normal">Riwayat perkembangan psikomotorik</h2>
<!-- Step 1 input fields -->

<input type="hidden" class="no_order" name="no_order" value="{{ $no_order }}">
<input type="hidden" class="member_id" name="member_id" value="{{ $member_id }}">
<div class="mt-3">
    <div class="row">
        <div class="col-lg-6">
            <table width="100%">
                @foreach ($per as $p)
                <tr>
                    <td width="40%">{{ $p->pertanyaan }}</td>
                    <td width="4%">:</td>
                    <td width="20%">
                        <input type="text" name="jawaban[]" class="form-control" value="4" disabled>
                    </td>
                    <td>&nbsp;Bulan</td>
                </tr>
                @endforeach

            </table>
        </div>
        <div class="col-lg-6">
            <table width="100%">
                @foreach ($per2 as $p)
                <tr>
                    <td width="40%">{{ $p->pertanyaan }}</td>
                    <td width="4%">:</td>
                    <td width="20%">
                        <input type="text" name="jawaban[]" class="form-control" value="3" disabled>
                    </td>
                    <td>&nbsp;Bulan</td>

                </tr>
                @endforeach
            </table>

        </div>
        <div class="col-lg-4">
            {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                style="border-radius: 14px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets') }}/carosel/gambar1.jpg" style="border-radius: 14px;"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets') }}/carosel/gambar2.jpg" style="border-radius: 14px;"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets') }}/carosel/gambar3.jpg" style="border-radius: 14px;"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            </div> --}}

        </div>

    </div>

</div>
<div class="mt-3">
    <button class="btn btn-primary next2" type="button" step_number="2">Next</button>
</div>