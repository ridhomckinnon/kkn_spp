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
        <table>
            <tr>
                <td>
                    <h2 style="text-transform: uppercase">{{ $student->classes->school->name }}</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ $student->classes->school->address }}</p>
                </td>
                <td>
                    <h4>Transaksi Pembayaran</h4>
                </td>
            </tr>
        </table>

        <hr>

        <div>
            <div style="float: left; width: 50%">
                <table>
                    <tr>
                        <td width="40">Nama</td>
                        <td style="width:30px">:</td>
                        <td>{{ $student->name }}</td>
                    </tr>

                    <tr>
                        <td>Nis</td>
                        <td style="width:30px">:</td>
                        <td>{{ $student->nis }}</td>
                    </tr>

                    <tr>
                        <td>Kelas</td>
                        <td style="width:30px">:</td>
                        <td>{{ $student->classes->name }}</td>
                    </tr>
                </table>
            </div>
            <div style="margin-left: 50%; width: 50%;">
                <table>
                    <tr>
                        <td  width=190">Dari Tanggal</td>
                        <td style="width:30px">:</td>
                        <td>{{ $from }}</td>
                    </tr>

                    <tr>
                        <td width='90'>Sampai Tanggal</td>
                        <td style="width:30px">:</td>
                        <td>{{ $to }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <br>


        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Transaksi</th>
                    <th scope="col">SPP</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($transactions as $data)
                    <tr>
                        <th scope="row">{{ ++$no }}</th>
                        <td>{{ $data->no_payment }}</td>
                        <td>{{ bulan($data->bulan).' / ' .$data->tahun }}</td>
                        <td>{{ rupiah($data->jumlah) }}</td>
                      </tr>
                    @endforeach
            </tbody>
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
