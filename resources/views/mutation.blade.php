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
                        <th class="font-bold p-4 text-gray-500 text-left">Alamat</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Tahun Ajaran</th>
                        <th class="font-bold p-4 text-gray-500 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                        <tr>

                            <td class="text-left font-light p-3 border-b border-slate-100">#</td>
                            <td class="text-left font-light p-3 border-b border-slate-100">123</td>
                            <td class="text-left font-light p-3 border-b border-slate-100">Budi</td>
                            <td class="text-left font-light p-3 border-b border-slate-100">Tembung</td>
                            <td class="text-left font-light p-3 border-b border-slate-100">
                                <select name="" id="yearOpt" class="border rounded-lg py-2">
                                    <option value="2019" class="py-2">2019</option>
                                    <option value="2020" class="py-2">2020</option>
                                    <option value="2021" class="py-2">2021</option>
                                    <option value="2022" class="py-2">2022</option>
                                    <option value="2023" class="py-2">2023</option>
                                    <option value="2024" class="py-2">2024</option>
                                    <option value="2025" class="py-2">2025</option>
                                </select>
                            </td>



                            <td class="text-left border-b border-slate-100">
                                <button
                                    class="btnEdit bg-sky-500 font-light rounded-lg text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 mr-2"
                                    data-modal-toggle="editModal" data-id=""
                                    data-url={{ url('/') }}><i class="fa-solid fa-pen-to-square"></i></button>
                                <button
                                    class="btnConfirm bg-rose-500 font-light rounded-lg text-white hover:bg-rose-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 ml-2"
                                    data-modal-toggle="confirmModal"
                                    data-href=""><i
                                        class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>

        </div>




    </x-slot>
</x-app-layout>
