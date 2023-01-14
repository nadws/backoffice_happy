<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cash Flow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 class="text-center">Laporan Cash FLow</h3>
            <p class="text-center">01-01-2023 ~ 31-01-2023</p>
            <table class="table table-bordered">
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
                <tfoot>
                    <tr>
                        <th style="text-align: center" colspan="5">Total</th>
                        <th style="text-align: right">Rp. 450,000</th>
                        <th style="text-align: right">Rp. 0</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</body>

<script>
    window.print()
</script>

</html>