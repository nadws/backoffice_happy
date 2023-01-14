<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Diagnosa extends Controller
{
    public function index(Request $r)
    {
        $data = [
            'title' => 'Diagnosa',
            'dt_pasien' => DB::table('dt_pasien')->orderBy('member_id', 'DESC')->get(),
        ];
        return view('diagnosa.index', $data);
    }

    public function view(Request $r)
    {
        if (empty($r->hal)) {
            $hal = '1';
        } else {
            $hal = $r->hal;
        }
        $data = [
            'title' => 'Detail Diagnosa',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get(),
            // 'per3' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '2')->get(),
            'kel_kpsp' => DB::table('kel_kpsp')->get(),
            'peds' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '3')->get(),
            'chat' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '4')->paginate(5),
            'hal' =>  $hal,
            'no_order' => $r->no_order,
            'member_id' => $r->member_id,
        ];
        return view('diagnosa.detail', $data);
    }

    public function form1(Request $r)
    {
        $data = [
            'title' => 'Isi Formulir',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get(),
            // 'per3' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '2')->get(),
            'kel_kpsp' => DB::table('kel_kpsp')->get(),
            'peds' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '3')->get(),
            'chat' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '4')->paginate(5),
            'no_order' => $r->no_order,
            'member_id' => $r->member_id,
        ];
        return view("diagnosa.step1", $data);
    }
    public function form2(Request $r)
    {
        $data = [
            'title' => 'Isi Formulir',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get(),
            // 'per3' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '2')->get(),
            'kel_kpsp' => DB::table('kel_kpsp')->get(),
            'peds' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '3')->get(),
            'chat' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '4')->paginate(5),
            'no_order' => $r->no_order,
            'member_id' => $r->member_id,
        ];
        return view("diagnosa.step2", $data);
    }

    public function form3(Request $r)
    {
        $data = [
            'title' => 'Isi Formulir',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get(),
            // 'per3' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '2')->get(),
            'kel_kpsp' => DB::table('kel_kpsp')->get(),
            'peds' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '3')->get(),
            'chat' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '4')->paginate(5),
            'no_order' => $r->no_order,
            'member_id' => $r->member_id,
            'pasien' => DB::table('dt_pasien')->where('member_id', $r->member_id)->first(),
            'ayah' => DB::table('dt_orang_tua')->where(['member_id_pasien' => $r->member_id, 'orang_tua' => 'Ayah'])->first(),
            'ibu' => DB::table('dt_orang_tua')->where(['member_id_pasien' => $r->member_id, 'orang_tua' => 'Ibu'])->first(),

        ];
        return view("diagnosa.step3", $data);
    }

    public function form4(Request $r)
    {
        if (empty($r->page)) {
            $page =  1;
        } else {
            $page =  $r->page + 1;
        }



        $data = [
            'title' => 'Isi Formulir',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get(),
            // 'per3' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '2')->get(),
            'kel_kpsp' => DB::table('kel_kpsp')->get(),
            'peds' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '3')->get(),
            'chat' => DB::table('pertanyaan')->where('kelompok_pertanyaan', '4')->paginate(5),
            'page' => $page,
            'no_order' => $r->no_order,
            'member_id' => $r->member_id,
        ];
        return view('diagnosa.step4', ['page' => 1], $data)->render();
    }
}
