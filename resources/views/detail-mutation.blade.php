@section('title', 'Detail Mutasi')
<x-app-layout>
    <x-slot name="heading">
        <a href="/mutation" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i>
            Kembali</a>
    </x-slot>
    <x-slot name="main">
        <div class="bg-white p-4 shadow rounded-xl">
            <div class="border rounded-xl p-4 mb-4">
                <div>
                    <h4 class="font-semibold capitalize mb-2">{{ $student->name }}</h4>
                    <p class="mb-2">Nis <span>: {{ $student->nis }}</span></p>
                    <p class="mb-2">Tahun Ajaran <span>: {{ $student->period->school_year }}</span></p>
                    <p class="mb-2">Kelas <span>: {{ $student->classes->name }}</span></p>
                    <p class="mb-2">Jurusan <span>: {{ $student->major }}</span></p>

                </div>
            </div>
            <div class="border rounded-xl p-4 mb-4">
                <div class="mb-4">
                    <h4 class="font-semibold capitalize">Transaksi terakhir</h4>
                </div>
                <div class="relative">
                    <table id="" class="dataTable table-auto" style="width:100%">
                        <thead class="bg-rose-500 text-white">
                            <tr>
                                <th class="font-bold p-4 text-left">#</th>
                                <th class="font-bold p-4 text-left">Bulan</th>
                                <th class="font-bold p-4 text-left">Tahun</th>
                                <th class="font-bold p-4 text-left">Jumlah</th>
                                <th class="font-bold p-4 text-left">Tanggal Bayar</th>
                                <th class="font-bold p-4 text-left">Tanggal Bayar</th>
                                <th class="font-bold p-4 text-left">Tanggal Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $data)
                                <tr>
                                    <td class="text-left font-light p-4 border-b border-slate-100">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">
                                        {{ bulan($data->bulan) }}</td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->tahun }}
                                    </td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->jumlah }}
                                    </td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">
                                        {{ $data->created_at }}</td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="border rounded-xl p-4">
                <div class="mb-4">
                    <h4 class="font-semibold">Cetak Bukti Bayar</h4>
                </div>
                <form class="" action='{{ url("mutation/cetak/$student->id") }}' method="post">
                    @csrf
                    <div class="mt-4">
                        <p class="mb-2">Dari</p>
                        <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input id="datepicker-start" name="from" type="text" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">

                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="mb-2">Sampai</p>
                        <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input id="datepicker-end" type="text" name="to" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">

                        </div>
                    </div>
                    <button type="submit" class="mt-4 bg-emerald-400 text-white w-full lg:w-32 py-3 px-4 rounded-xl">Cetak</button>
                </form>
                <div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>

<script>
    const datepicker_start = document.getElementById('datepicker-start');
    const datepicker_end = document.getElementById('datepicker-end');
    new Datepicker(datepicker_start, {
        // options
    });
    new Datepicker(datepicker_end, {
        // options
    });
</script>
