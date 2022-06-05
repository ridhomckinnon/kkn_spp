<x-app-layout>
    <x-slot name="main">

        <div class="">
            <div class="">
                <div class="flex justify-center"><img src="img/logo/logo.png" alt=""></div>
                <div class="text-center">SMK Swasta Jambi Medan</div>
            </div>
            <form class="mt-4" action="" method="POST">
                <!-- <h3>Profile Sekolah</h3> -->
                <div class="grid grid-cols-2 gap-2">

                    <div>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Sekolah">
                    </div>
                    <div class="mt-2">
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="NPSN">
                    </div>
                    <div class="mt-2">
                        <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email">
                    </div>
                    <div class="mt-2">
                        <textarea name="" placeholder="Alamat Sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div
                    class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button  type="submit"
                        class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Update</button>
                    <a href="/" class="no-underline text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10">Kembali</a>

                </div>
            </form>
        </div>

    </x-slot>
</x-app-layout>
