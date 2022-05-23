<div id="addModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="p-6 space-y-6">
                <form class="space-y-6" action="{{ route('post.student') }}" method="POST">
                    @csrf


                </form>
            </div>

            <div
                class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="addModal" type="button"
                    class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                <button data-modal-toggle="addModal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
            </div>
        </div>
    </div>
</div>
