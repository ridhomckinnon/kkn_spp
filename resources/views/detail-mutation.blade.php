<x-app-layout>
    <x-slot name="main">

        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold text-2xl">{{$student->name}}</h2>
                    <!-- <p class="font-light">this page for student</p> -->
                </div>
            </div>
        </div>

        <div>
            Nis : {{$student->nis}}<br>
            Tahun Ajaran : {{$student->period->school_year}}<br>
            Kelas  : {{$student->classes->name}}<br>

            Jurusan : {{$student->major}}
        </div>

        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold text-2xl">Transaksi Terakhir</h2>
                    <!-- <p class="font-light">this page for student</p> -->
                </div>
            </div>
        </div>

        <div class="relative">
            <table id="dataTable" class="table-auto w-full border overflow-hidden rounded-xl">
                <thead class="bg-slate-100 mt-4">
                    <tr>
                        <th class="font-bold p-4 text-gray-500 text-left">#</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Bulan</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Tahun</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Jumlah</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Tanggal Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $data)
                        <tr>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}
                            </td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->bulan }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->tahun }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->jumlah }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold text-2xl">Cetak Bukti Bayar</h2>
                </div>
            </div>
        </div>

        <div>
            <form action='{{url("mutation/cetak/$student->id")}}' method="post">
                @csrf
                Dari : <input type="date" name="from">
                Sampai : <input type="date" name="to">
                <button type="submit" class="btn">Simpan</button>
            </form>
        </div>

    </x-slot>


</x-app-layout>
