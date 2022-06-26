<x-app-layout>
    <x-slot name="heading">
        <a href="/student" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main" class="">
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
        <div class="bg-white p-4">

            <div class="mb-4 relative lg:flex md:flex justify-between align-middle items-center">
                <div class="lg:w-2/6 flex lg:justify-start">
                    <div class="mb-4">
                        <h2 class="font-bold text-2xl">Siswa {{ $class->name }}</h2>
                    </div>
                </div>
                <div class="lg:w-4/6 flex lg:justify-end justify-center">
                    <button
                        class="bg-sky-500 lg:px-4 lg:py-2 text-sm text-white rounded-xl w-auto block text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 font-medium rounded-lg text-md px-6 py-3 text-center"
                        type="button" data-modal-toggle="addModal"> <i class="fa-solid fa-plus"></i> Tambah Data
                    </button>
                    <button
                        class="bg-amber-500 px-4 py-2 text-sm text-white rounded-xl lg:ml-4 mx-4 w-auto block text-white hover:bg-amber-600 focus:ring-2 focus:ring-amber-300 font-medium rounded-lg text-md px-6 py-3 text-center"
                        type="button" data-modal-toggle="addModalImport"> <i class="fa-solid fa-file"></i> Import Siswa
                    </button>

                    <a
                        class="bg-emerald-500 px-4 py-2 text-sm text-white rounded-xl w-auto block text-white hover:bg-emerald-600 focus:ring-2 focus:ring-emerald-300 font-medium rounded-lg text-md px-6 py-3 text-center no-underline"
                        href="{{asset('import/studentImport.xlsx')}}" download> <i class="fa-solid fa-file"></i> Download Template
                    </a>

                    <div id="addModalImport" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Tambah Data
                                    </h3>

                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="addModalImport">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>



                                <form class="space-y-6" action="{{ route('import.student') }}" method="POST" enctype="multipart/form-data">
                                    <div class="p-6 space-y-6 h-96 overflow-y-auto" style="">
                                        @csrf
                                        <input type="hidden" name="idClasses" value="{{$idClass}}">
                                        <input type="hidden" name="idSchool" value="{{$class->school->id}}">
                                        <div>
                                            <select name="id_period"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>Periode</option>
                                                @foreach ($periods as $period)
                                                    <option value="{{ $period->id }}">{{ $period->school_year." " .$period->classes .' - '. jurusan($period->major) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="major">
                                                <option selected>Pilih Jurusan</option>
                                                <option value="TKJ">Teknik Komputer Jaringan </option>
                                                <option value="TJKL">Teknik Jaringan Komputer dan Layanan Bisnis </option>
                                                <option value="PM">Pemesinan</option>
                                                <option value="BM">Manajemen Perkantoran dan Layanan Bisnis</option>
                                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                                <option value="OTKP">Otomatisasi dan Tata Kelola Perkantoran</option>

                                            </select>
                                        </div>
                                        <div>
                                            <input type="file" name="file"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="File">
                                        </div>
                                    </div>

                                    <div
                                        class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button data-modal-toggle="addModalImport" type="submit"
                                            class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                                        <button data-modal-toggle="addModalImport" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

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
                                    <div class="p-6 space-y-6 h-96 overflow-y-auto" style="">
                                        @csrf

                                        <div>
                                            <input type="number" name="nis"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="NIS">
                                        </div>

                                        <div>
                                            <input type="number" name="nisn"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="NISN">
                                        </div>

                                        <div>
                                            <input type="nama" name="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nama Siswa">
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="gender">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="L">Pria</option>
                                                <option value="P">Wanita</option>
                                            </select>
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="major">
                                                <option selected>Pilih Jurusan</option>
                                                <option value="TJKL">Teknik Jaringan Komputer dan Layanan Bisnis </option>

                                                <option value="TKJ">Teknik Komputer Jaringan </option>
                                                <option value="PM">Pemesinan</option>
                                                <option value="BM">Manajemen Perkantoran dan Layanan Bisnis</option>
                                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                                <option value="OTKP">Otomatisasi dan Tata Kelola Perkantoran</option>
                                            </select>
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="religion">
                                                <option selected>Pilih Agama</option>
                                                <option value="I">Islam</option>
                                                <option value="KP">Protestan</option>
                                                <option value="K">Katholik</option>
                                                <option value="H">Hindu</option>
                                                <option value="B">Budha</option>
                                            </select>
                                        </div>

                                        <div>
                                            <input type="hidden" name="id_classes" value="{{ $idClass }}">
                                        </div>

                                        <div>
                                            <select name="id_period"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>Periode</option>
                                                @foreach ($periods as $period)
                                                    <option value="{{ $period->id }}">{{ $period->school_year." " .$period->classes .' - '. jurusan($period->major) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <textarea name="address" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Alamat"></textarea>
                                        </div>

                                        <div>
                                            <input type="number" name="phone"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nomor Handphone">
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
                                    <div class="p-6 space-y-6 h-96 overflow-y-auto">
                                        <input type="hidden" name="id" id="idStudent">
                                        <div>
                                            <input type="number" name="nis" id="nis"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="NIS" required>
                                        </div>

                                        <div>
                                            <input type="number" name="nisn" id="nisn"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="NISN">
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
                                                <option value="L">Pria</option>
                                                <option value="P">Wanita</option>
                                            </select>
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="major" id="major">
                                                <option selected>Pilih Jurusan</option>
                                                <option value="TJKL">Teknik Jaringan Komputer dan Layanan Bisnis </option>

                                                <option value="TKJ">Teknik Komputer Jaringan </option>
                                                <option value="PM">Pemesinan</option>
                                                <option value="BM">Manajemen Perkantoran dan Layanan Bisnis</option>
                                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                                <option value="OTKP">Otomatisasi dan Tata Kelola Perkantoran</option>
                                            </select>
                                        </div>

                                        <div>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                name="religion" id="religion">
                                                <option selected>Pilih Agama</option>
                                                <option value="I">Islam</option>
                                                <option value="KP">Protestan</option>
                                                <option value="K">Katholik</option>
                                                <option value="H">Hindu</option>
                                                <option value="B">Budha</option>
                                            </select>
                                        </div>

                                        <div>
                                            <input type="hidden" name="id_classes" value="{{ $idClass }}">
                                        </div>

                                        <div>
                                            <select name="id_period" id="id_period"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>Periode</option>
                                                @foreach ($periods as $period)
                                                    <option value="{{ $period->id }}">{{ $period->school_year." " .$period->classes .' - '. jurusan($period->major) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <textarea id="address" name="address" rows="4"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Alamat"></textarea>
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

            <div class="relative ">
                <table class="dataTable table-auto w-full border overflow-hidden rounded-xl ">
                    <thead class="bg-slate-100 text-white border-b">
                        <tr>
                            {{-- <th class="font-bold p-4 pl-4 text-gray-500 text-left">#</th> --}}
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">No</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">NIS</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">Nama</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">Jenis Kelamin</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">Telepon</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">Agama</th>
                            <th class="font-bold p-4 pl-4 text-gray-500 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $data)
                            <tr class="odd:bg-white even:bg-slate-100 hover:bg-slate-50 cursor-pointer">
                                {{-- <td class="text-left font-light p-4 border-b border-slate-100">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-1" type="checkbox"
                                            class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 rounded focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                    </div>
                                </td> --}}
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $loop->iteration }}
                                </td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->nis }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->name }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ ($data->gender == "L") ? "Laki-laki" : "Perempuan"  }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ $data->phone }}</td>
                                <td class="text-left font-light p-4 border-b border-slate-100">{{ religion($data->religion) }}</td>
                                <td class="text-left border-b border-slate-100">
                                    <button
                                        class="btnEdit bg-sky-500 font-light rounded-lg text-white hover:bg-sky-600 focus:ring-2 focus:ring-sky-300 py-1 px-2 mx-2"
                                        data-modal-toggle="editModal" data-url={{ url('/') }}
                                        data-id="{{ $data->id }}"><i class="fa-solid w-4 h-4 fa-pen-to-square"></i></button>
                                    <button
                                        class="btnConfirm bg-rose-500 font-light rounded-lg text-white hover:bg-rose-600 focus:ring-2 focus:ring-sky-300 py-1 px-2 mx-2"
                                        data-modal-toggle="confirmModal"
                                        data-href="{{ url('student/delete') . '/' . $data->id }}"><i
                                            class="fa-solid w-4 h-4 fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                $(document).on('click',".btnConfirm",function() {
                    var href = $(this).data('href');
                    $("#btnDelete").attr('href', href)
                });

                $(document).on('click','.btnEdit',function() {
                    var id = $(this).data('id')
                    var url = $(this).data('url')
                    $.get(url + "/student/" + id, function({data}) {
                        $('#idStudent').val(data.id);
                        $('#nis').val(data.nis);
                        $('#nisn').val(data.nisn);
                        $('#religion').val(data.religion);
                        $('#name').val(data.name);
                        $('#gender').val(data.gender);
                        $('#major').val(data.major);
                        $('#id_classes').val(data.id_classes);
                        $('#id_period').val(data.id_period);
                        $('#address').val(data.address);
                        $('#phone').val(data.phone);
                        console.log(data);
                    })
                })
            });
        </script>
    </x-slot>
</x-app-layout>
