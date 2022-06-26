<x-app-layout>
    <x-slot name="heading">
        <a href="/dashboard" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main">
        <div class="bg-white p-6 shadow rounded-xl">
            <div class="mb-4 relative flex justify-between align-middle items-center">
                <div class="w-2/6 flex justify-start">
                    <div>
                        <h2 class="font-bold text-2xl">Mutasi</h2>
                        <!-- <p class="font-light">this page for student</p> -->
                    </div>
                </div>
            </div>
            <div class="w-full">
                <table class="dataTable" style="width:100%">
                    <thead class="bg-slate-100 mt-4">
                        <tr>
                            <th class="font-bold p-4 text-gray-500 text-left">#</th>
                            <th class="font-bold p-4 text-gray-500 text-left">Nis</th>
                            <th class="font-bold p-4 text-gray-500 text-left">Nama Siswa</th>
                            <th class="font-bold p-4 text-gray-500 text-left">Jenis Kelamin</th>
                            <th class="font-bold p-4 text-gray-500 text-left">Tahun Ajaran</th>
                            <th class="font-bold p-4 text-gray-500 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $data)
                            <tr class="odd:bg-white even:bg-slate-100 hover:bg-slate-50 cursor-pointer">
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}
                                </td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->nis }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->name }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ ($data->gender == "L") ? "Laki-laki" : "Perempuan"  }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->period->school_year }}</td>
                                <td class="text-left border-b border-slate-100">
                                    <a class="no-underline font-light text-blue-500" href='{{url("mutation/student/$data->id")}}'>Lihat Mutasi</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </x-slot>


</x-app-layout>
