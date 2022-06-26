<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Export PDF Laravel 8!</title>
</head>

<body>
    {{-- <div class="container"> --}}
    <div class="row">
        <h2 align='center'>Rakapitulasi Pembayaran SPP Perbulan</h2>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <h4 style="text-transform: uppercase">{{ $user->school->name }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ $user->school->address }}</p>
                </td>
                <td>
                </td>
            </tr>
        </table>

        <hr>

        <div>
            <h2>Kelas : {{ $classes->name }}</h2>
            <div style="float: left; width: 50%">
                <table>
                    <tr>
                        <td width=190">Bulan</td>
                        <td style="width:30px">:</td>
                        <td>{{ bulan($bulan) }}</td>
                    </tr>

                    <tr>
                        <td width='90'>Tahun</td>
                        <td style="width:30px">:</td>
                        <td>{{ $tahun }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <br>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th>Bayar</th>
                    <th>Belum Bayar</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                    $bayar =0;
                    $belumBayar =0;
                @endphp
                @foreach ($classes->student as $student)
                    @php
                        $hasil = $student->transactions()->where('bulan', '1')->where('tahun', $tahun)->sum('jumlah');
                        $bayar += $hasil;
                        $belumBayar += $student->period->price_spp - $hasil;
                    @endphp
                    <tr>
                        <th scope="row">{{ ++$no }}</th>
                        <td>{{ $student->name }}</td>
                        <td>
                            {{ rupiah($hasil) }}
                        </td>
                        <td>
                            {{ rupiah($student->period->price_spp - $hasil) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total :</th>
                    <th>{{rupiah($bayar)}}</th>
                    <th>{{rupiah($belumBayar)}}</th>
                </tr>
            </tfoot>
        </table>


    </div>
    {{-- </div> --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
