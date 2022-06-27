@section('title', 'Profile Sekolah')
<x-app-layout>
    <x-slot name="heading">
        <a href="/dashboard" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main">
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

        <div class="bg-white p-4 shadow rounded-xl">
            <div class="mb-4">
                <div class="flex justify-center">
                    <img src='{{asset("logo").'/'.$user->school->logo}}' alt="">
                </div>
                <div class="text-center text-lg font-semibold">SMK Swasta Jambi Medan</div>
            </div>
            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                <!-- <h3>Profile Sekolah</h3> -->
                <div class="grid lg:grid-cols-2 gap-2">

                    @csrf
                    <div>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama Sekolah" value="{{ $user->school->name }}">
                    </div>

                    <div>
                        <input type="number" name="npsn"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="NPSN" value="{{ $user->school->npsn }}">
                    </div>

                    <div class="lg:mt-2">
                        <textarea name="address" placeholder="Alamat Sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            id="" cols="30" rows="10">{{ $user->school->address }}</textarea>
                    </div>

                    <div class="lg:mt-2">
                        <input type="file" name="logo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama Sekolah" value="{{ $user->school->npsn }}">
                        <span><i>*isi jika ingin mengganti logo</i></span>
                    </div>
                </div>
                <div
                    class="flex items-center justify-center py-6 space-x-2">
                    <button type="submit"
                        class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Update</button>
                    <a href="/dashboard"
                        class="no-underline text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10">Kembali</a>

                </div>
            </form>
        </div>

    </x-slot>
</x-app-layout>
