<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Student') }}
        </h2>
    </x-slot>
    <x-slot name="main" class="">
        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold  text-2xl">Student</h2>
                    <!-- <p class="font-light">this page for student</p> -->
                </div>
            </div>
            <div class="w-4/6 flex justify-end">
                <div class="relative w-3/6">
                    <input type="text" class="border w-full h-12 border-slate-200 rounded-xl bg-transparent focus:outline-none focus:placeholder-transparent focus:ring-2 appearance-none focus:ring-blue-500 focus:border-blue-500" placeholder="Cari">
                    <button class="bg-slate-100 w-10 h-10 border border-slate-300 text-xs rounded-xl absolute transition-colors duration-300 border rounded-lg font-light hover:bg-gray-100 focus:outline-none top-1 right-1">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <button class="bg-sky-500 px-4 py-2 text-sm text-white rounded-xl ml-4 w-auto block text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 font-medium rounded-lg text-md px-6 py-3 text-center" type="button" data-modal-toggle="addModal"> <i class="fa-solid fa-plus"></i></button>
                <div id="addModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Tambah Data
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="addModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>

                            <div class="p-6 space-y-6">
                            <form class="space-y-6" action="#">
                                <div>
                                    <input type="nama" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Siswa" required>
                                </div>
                                <div>
                                    <select id="major" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="AK">Akutansi</option>
                                    <option value="AP">Administrsai Perkantoran</option>
                                    <option value="TKR">TKR</option>
                                    </select>
                                </div>
                                <div>
                                    <select id="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                    </select>
                                </div>

                            </form>
                            </div>

                            <div class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button data-modal-toggle="addModal" type="button" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                                <button data-modal-toggle="addModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edit Data
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>

                            <div class="p-6 space-y-6">
                            <form class="space-y-6" action="#">
                                <div>
                                    <input type="nama" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Siswa" required>
                                </div>
                                <div>
                                    <select id="major" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="AK">Akutansi</option>
                                    <option value="AP">Administrsai Perkantoran</option>
                                    <option value="TKR">TKR</option>
                                    </select>
                                </div>
                                <div>
                                    <select id="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                    </select>
                                </div>

                            </form>
                            </div>

                            <div class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button data-modal-toggle="editModal" type="button" class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-md px-6 py-3 text-center">Update</button>
                                <button data-modal-toggle="editModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="confirmModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Hapus Data
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="confirmModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>

                            <div class="p-6 space-y-6">
                                <p>Apakah anda yakin ingin menghapus data ini?</p>
                            </div>

                            <div class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button data-modal-toggle="confirmModal" type="button" class="text-white bg-rose-500 hover:bg-rose-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-md px-6 py-3 text-center">Hapus</button>
                                <button data-modal-toggle="confirmModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden border rounded-xl mt-4">
            <table class="table-auto w-full ">
                <thead class="bg-slate-100 text-white border-b">
                    <tr>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">#</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">No</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">NIS</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Nama</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Jenis Kelamin</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Telepon</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Alamat</th>
                        <!-- <th class="font-bold p-4 pl-4 text-gray-500 text-left">Jurusan</th>
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Kelas</th> -->
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $data)
                    <tr>
                        <td class="text-left font-light p-4 border-b border-slate-100">
                            <div class="flex items-center">
                                <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 rounded focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}</td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->name }}</td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->nis }}</td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->gender }}</td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->phone }}</td>
                        <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->address }}</td>
                        <td class="text-left border-b border-slate-100">
                            <button class="bg-sky-500 font-light rounded-lg text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 mr-2" data-modal-toggle="editModal"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="bg-rose-500 font-light rounded-lg text-white hover:bg-rose-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 ml-2" data-modal-toggle="confirmModal"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        </x-slot>
        <div class="max-w-7xl mx-auto  bg-white mt-4">
        </div>
    </x-app-layout>
