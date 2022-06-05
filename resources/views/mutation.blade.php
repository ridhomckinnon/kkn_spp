<x-app-layout>
    <x-slot name="main">

        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold text-2xl">Mutasi</h2>
                    <!-- <p class="font-light">this page for student</p> -->
                </div>
            </div>
        </div>
        <div class="relative">
            <table id="dataTable" class="table-auto w-full border overflow-hidden rounded-xl">
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
                        <tr>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}
                            </td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->nis }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->name }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->gender }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->period->school_year }}</td>
                            <td class="text-left border-b border-slate-100">
                                <a href='{{url("mutation/student/$data->id")}}'>Lihat Mutasi</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </x-slot>


</x-app-layout>
