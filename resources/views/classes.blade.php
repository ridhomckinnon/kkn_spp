<x-app-layout>
    <x-slot name="heading">
        <a href="/dashboard" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i>
            Kembali</a>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Kelas' }}
        </h2>
    </x-slot>
    <x-slot name="main" class="">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px justify-center text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
                role="tablist">
                <li class="w-6/12" role="class">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 w-full" id="active-class-tab"
                        data-tabs-target="#active-class" type="button" role="tab" aria-controls="active-class"
                        aria-selected="false">Kelas Aktif</button>
                </li>
                <li class="w-6/12" role="class">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 w-full border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Kelas Nonaktif</button>
                </li>

            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="active-class" role="tabpanel"
                aria-labelledby="active-class-tab">
                @if ($errors->any())
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </span>
                    </div>
                    <!-- <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div> -->
                @endif
                <div class="mb-4 relative flex justify-between align-middle items-center">
                    <div class="w-2/6 flex justify-start">
                        <div>
                            <h2 class="font-bold text-2xl">Kelas</h2>
                            <!-- <p class="font-light">this page for student</p> -->
                        </div>
                    </div>
                    <div class="w-4/6 flex justify-end">
                        <!-- <div class="relative w-3/6">
                        <input type="text"
                            class="border w-full h-12 border-slate-200 rounded-xl bg-transparent focus:outline-none focus:placeholder-transparent focus:ring-2 appearance-none focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari">
                        <button
                            class="bg-slate-100 w-10 h-10 border border-slate-300 text-xs rounded-xl absolute transition-colors duration-300 border rounded-lg font-light hover:bg-gray-100 focus:outline-none top-1 right-1">
                            <i class="fa fa-search"></i>
                        </button>
                    </div> -->
                        <button
                            class="bg-sky-500 px-4 py-2 text-sm text-white rounded-xl ml-4 w-auto block text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 font-medium rounded-lg text-md px-6 py-3 text-center"
                            type="button" data-modal-toggle="addModal"> <i class="fa-solid fa-plus"></i> Tambah Data
                        </button>
                        <div id="addModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                                    <div
                                        class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
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

                                    <form class="space-y-6" action="{{ route('post.classes') }}" method="POST">
                                        <div class="p-6 space-y-6">
                                            @csrf
                                            <div>
                                                <input type="text" name="name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Nama Kelas">
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

                                    <div
                                        class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
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

                                    <form class="space-y-6" action="{{ route('update.classes') }}" method="POST">
                                        @csrf

                                        <input type="hidden" name="idClasses" id="idClasses">
                                        <div class="p-6 space-y-6">
                                            <div>
                                                <input type="text" name="name" id="name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Nama Kelas " required>
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


                    </div>
                </div>

                <div class="relative">
                    <table class="dataTable table-auto w-full border overflow-hidden rounded-xl">
                        <thead class="bg-slate-100 mt-4">
                            <tr>
                                <th class="font-bold p-4 text-gray-500 text-left">#</th>
                                <th class="font-bold p-4 text-gray-500 text-left">Nama Kelas</th>
                                <th class="font-bold p-4 text-gray-500 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($classes as $data)
                                <tr class="odd:bg-white even:bg-slate-100 hover:bg-slate-50 cursor-pointer">

                                    <td class="text-left font-light p-3 border-b border-slate-100">
                                        {{ $loop->iteration }}</td>
                                    <td class="text-left font-light p-3 border-b border-slate-100">{{ $data->name }}
                                    </td>


                                    <td class="flex text-left border-b border-slate-100">
                                        <button
                                            class="btnEdit bg-sky-500 font-light rounded-lg text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 py-1 px-2 mx-2"
                                            data-modal-toggle="editModal" data-id="{{ $data->id }}"
                                            data-url={{ url('/') }} id="btnEdit"><i
                                                class="fa-solid w-4 h-4 fa-pen-to-square"></i></button>

                                        <form class="inline"
                                            action="{{ route('change.classes', ['classes' => $data->id]) }}">
                                            <button
                                                class="btnNonactive bg-rose-500 font-light rounded-lg text-white hover:bg-rose-600 focus:ring-2 focus:ring-rose-300 py-1 px-2 mx-2"><i
                                                    class="fa-solid w-4 h-4 fa-power-off"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
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
                                    class="text-white bg-rose-500 no-underline hover:bg-rose-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-md px-6 py-3 text-center">Hapus</a>
                                <button data-modal-toggle="confirmModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="relative">
                    <table class="dataTable table-auto w-full border overflow-hidden rounded-xl">
                        <thead class="bg-slate-100 mt-4">
                            <tr>
                                <th class="font-bold p-4 text-gray-500 text-left">#</th>
                                <th class="font-bold p-4 text-gray-500 text-left">Nama Kelas</th>
                                <th class="font-bold p-4 text-gray-500 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($inActiveClasses as $data)
                                <tr class="odd:bg-white even:bg-slate-100 hover:bg-slate-50 cursor-pointer">

                                    <td class="text-left font-light p-3 border-b border-slate-100">
                                        {{ $loop->iteration }}</td>
                                    <td class="text-left font-light p-3 border-b border-slate-100">{{ $data->name }}
                                    </td>
                                    <td class="text-left border-b border-slate-100">
                                        <button
                                            class="btnConfirm bg-red-500 font-light rounded-lg text-white hover:bg-red-600 focus:ring-2 focus:ring-red-300 py-1 px-2 mx-2"
                                            data-modal-toggle="confirmModal"
                                            data-href="{{ url('classes/delete') . '/' . $data->id }}"><i
                                                class="fa-solid w-4 h-4 fa-trash"></i></button>
                                        <form class="inline"
                                            action="{{ route('change.classes', ['classes' => $data->id]) }}">
                                            <button
                                                class="btnNonactive bg-emerald-500 font-light rounded-lg text-white hover:bg-emerald-600 focus:ring-2 focus:ring-emerald-300 py-1 px-2"><i
                                                    class="fa-solid w-4 h-4 fa-power-off"></i></button>

                                        </form>
                                        <!-- <a href="{{ route('change.classes', ['classes' => $data->id]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800: no-underline"">aktifkan Kelas</a> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>


    </x-slot>
    <div class="max-w-7xl mx-auto  bg-white mt-4">
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });

                // Confirm Delete
                $(document).on('click', '.btnConfirm', function() {
                    var url = $(this).data('href');
                    $('#btnDelete').attr('href', url);
                });

                // Update Modal
                $(document).on('click', '.btnEdit', function() {
                    var id = $(this).data('id')
                    var url = $(this).data('url')
                    $.get(url + "/classes/" + id, function({
                        data
                    }) {
                        $('#idClasses').val(data.id);
                        $('#name').val(data.name);
                    })
                })
            });
        </script>
    </x-slot>
</x-app-layout>
