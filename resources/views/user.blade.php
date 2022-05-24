<x-app-layout>
    <x-slot name="main" class="">
        <div class="mb-4 relative flex justify-between align-middle items-center">
            <div class="w-2/6 flex justify-start">
                <div>
                    <h2 class="font-bold  text-2xl">Student</h2>
                </div>
            </div>
            <div class="w-4/6 flex justify-end">
                <button
                    class="bg-sky-500 px-4 py-2 text-sm text-white rounded-xl ml-4 w-auto block text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 font-medium rounded-lg text-md px-6 py-3 text-center"
                    type="button" data-modal-toggle="addModal"> <i class="fa-solid fa-plus"></i> Tambah Data
                </button>
                <div id="addModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Tambah Data
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="addModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                            <form class="space-y-6" action="{{ route('post.student') }}" method="POST">
                                <div class="p-6 space-y-6">
                                    @csrf

                                    <div>
                                        <input type="text" name="nis"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="NIS" required>
                                    </div>

                                    <div>
                                        <input type="nama" name="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Nama Siswa" required>
                                    </div>

                                    <div>
                                        <select
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="gender">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="major">
                                            <option selected>Pilih Jurusan</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="AK">Akutansi</option>
                                            <option value="AP">Administrsai Perkantoran</option>
                                            <option value="TKR">TKR</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select name="id_classes"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Pilih Kelas</option>
                                            {{-- @foreach ($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div>
                                        <select name="id_period"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Periode</option>
                                            {{-- @foreach ($periods as $period)
                                                <option value="{{ $period->id }}">{{ $period->school_year }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div>
                                        <textarea name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Your message..."></textarea>
                                    </div>

                                    <div>
                                        <input type="number" name="phone"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Nomor Handphone" required>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button data-modal-toggle="addModal" type="submit"
                                        class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                                    <button data-modal-toggle="addModal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="editModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Edit Data
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="editModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                            <form class="space-y-6" action="{{ route('update.student') }}" method="POST">
                                @csrf
                                <div class="p-6 space-y-6">
                                    <input type="hidden" name="id" id="idStudent">
                                    <div>
                                        <input type="text" name="nis" id="nis"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="NIS" required>
                                    </div>

                                    <div>
                                        <input type="nama" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Nama Siswa" required>
                                    </div>

                                    <div>
                                        <select
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="gender" id="gender">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>

                                    <div>
                                        <select
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="major" id="major">
                                            <option selected>Pilih Jurusan</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="AK">Akutansi</option>
                                            <option value="AP">Administrsai Perkantoran</option>
                                            <option value="TKR">TKR</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select name="id_classes" id="id_classes"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Pilih Kelas</option>
                                            {{-- @foreach ($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div>
                                        <select name="id_period" id="id_period"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Periode</option>
                                            {{-- @foreach ($periods as $period)
                                                <option value="{{ $period->id }}">{{ $period->school_year }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div>
                                        <textarea id="address" name="address" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Your message..."></textarea>
                                    </div>

                                    <div>
                                        <input type="number" name="phone" id="phone"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Nomor Handphone" required>
                                    </div>

                                </div>

                                <div
                                    class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button data-modal-toggle="editModal" type="submit"
                                        class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-md px-6 py-3 text-center">Update</button>
                                    <button data-modal-toggle="editModal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="confirmModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Hapus Data
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="confirmModal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="p-6 space-y-6">
                                <p>Apakah anda yakin ingin menghapus data ini?</p>
                            </div>

                            <div
                                class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <a id="btnDelete"
                                    class="text-white bg-rose-500 hover:bg-rose-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-md px-6 py-3 text-center">Hapus</a>
                                <button data-modal-toggle="confirmModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
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
                        <th class="font-bold p-4 pl-4 text-gray-500 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($students as $data)
                        <tr>
                            <td class="text-left font-light p-4 border-b border-slate-100">
                                <div class="flex items-center">
                                    <input id="checkbox-table-1" type="checkbox"
                                        class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 rounded focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}
                            </td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->name }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->nis }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->gender }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->phone }}</td>
                            <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->address }}</td>
                            <td class="text-left border-b border-slate-100">
                                <button
                                    class="btnEdit bg-sky-500 font-light rounded-lg text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 mr-2"
                                    data-modal-toggle="editModal" data-url={{ url('/') }}
                                    data-id="{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button
                                    class="btnConfirm bg-rose-500 font-light rounded-lg text-white hover:bg-rose-600 focus:ring-2 focus:ring-sky-300 w-8 h-8 ml-2"
                                    data-modal-toggle="confirmModal"
                                    data-href="{{ url('student/delete') . '/' . $data->id }}"><i
                                        class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>


    </x-slot>
    <div class="max-w-7xl mx-auto  bg-white mt-4">
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Confirm Delete
                $(".btnConfirm").click(function() {
                    var href = $(this).data('href');
                    $("#btnDelete").attr('href', href)
                });

                $('.btnEdit').click(function() {
                    var id = $(this).data('id')
                    var url = $(this).data('url')
                    $.get(url + "/student/" + id, function({
                        data
                    }) {
                        $('#idStudent').val(data.id);
                        $('#nis').val(data.nis);
                        $('#name').val(data.name);
                        $('#gender').val(data.gender);
                        $('#major').val(data.major);
                        $('#id_classes').val(data.id_classes);
                        $('#id_period').val(data.id_period);
                        $('#address').val(data.address);
                        $('#phone').val(data.phone);
                    })
                })
            });
        </script>
    </x-slot>
</x-app-layout>
