<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pembukuan extends Controller
{
    public function index(Request $r)
    {
        $tgl1 = $r->tgl1 ?? date('Y-m-1');
        $tgl2 = $r->tgl2 ?? date('Y-m-t');
        $data = [
            'title' => 'CashFlow',
            'invoice' => DB::select("SELECT a.pembayaran,a.id_registrasi,a.tgl, a.no_order, b.nama_pasien, b.member_id, a.status FROM invoice_registrasi as a left join dt_pasien as b on b.member_id = a.member_id where a.tgl between '$tgl1' and '$tgl2' order by a.id_registrasi DESC"),
            'dt_pasien' => DB::table('dt_pasien')->get(),
            'nominal' => DB::table('tb_nominal')->where('jenis', 'inv_registrasi')->get()
        ];
        return view('pembukuan.index', $data);
    }

    public function cetak(Request $r)
    {
        $tgl1 = $r->tgl1 ?? date('Y-m-1');
        $tgl2 = $r->tgl2 ?? date('Y-m-t');
        $data = [
            'title' => 'CashFlow',
            'invoice' => DB::select("SELECT a.pembayaran,a.id_registrasi,a.tgl, a.no_order, b.nama_pasien, b.member_id, a.status FROM invoice_registrasi as a left join dt_pasien as b on b.member_id = a.member_id where a.tgl between '$tgl1' and '$tgl2' order by a.id_registrasi DESC"),
            'dt_pasien' => DB::table('dt_pasien')->get(),
            'nominal' => DB::table('tb_nominal')->where('jenis', 'inv_registrasi')->get()
        ];
        return view('pembukuan.cetak', $data);
    }

    public function logout(Request $r)
    {
        Auth::guard('web')->logout();

        $r->session()->invalidate();

        $r->session()->regenerateToken();

        return redirect('http://127.0.0.1:8001/');
    }
}
