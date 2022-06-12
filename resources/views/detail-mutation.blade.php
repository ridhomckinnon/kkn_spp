<x-app-layout>
    <x-slot name="heading">
        <a href="/mutation" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main">
        <div class="">

            <div class="border rounded-xl p-4 mb-4">
                <div>
                    <h4 class="font-semibold capitalize">{{$student->name}}</h4>
                    <!-- <p class="font-light">this page for student</p> -->
                </div>

                <div>
                    <p>Nis  <span>: {{$student->nis}}</span></p>
                    <p>Tahun Ajaran <span>: {{$student->period->school_year}}</span></p>
                    <p>Kelas  <span>: {{$student->classes->name}}</span></p>
                    <p>Jurusan <span>: {{$student->major}}</span></p>

                </div>
            </div>
            <div class="border rounded-xl p-4 mb-4">
                <div class="">
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
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ bulan($data->bulan) }}</td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->tahun }}</td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->jumlah }}</td>
                                    <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->created_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="border rounded-xl p-4">
                <div>
                    <h4 class="font-semibold">Cetak Bukti Bayar</h4>
                </div>
                <form action='{{url("mutation/cetak/$student->id")}}' method="post">
                    @csrf
                    <div>
                        <label for="">Dari : </label>
                        <input type="date" name="from" class="block bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>
                    <div class="mt-2">
                        <label for="">Sampai : </label>
                        <input type="date" name="to" class="block bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <button type="submit" class="mt-4 bg-emerald-400 text-white py-3 px-4 rounded-xl">Cetak</button>
                </form>
                <div>
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>
