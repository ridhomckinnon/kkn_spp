<x-app-layout>
    <x-slot name="heading">
        <a href="/dashboard" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main" class="">
        <div class="bg-white p-4 shadow rounded-xl">

            <div class="main-title mb-4">
                <h2 class="font-bold text-2xl">Pilih Kelas</h2>
            </div>
            <div class="">
                <div class="">
                    <form action="{{route('student')}}" method="GET">
                        <div class="mb-4 relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="fa fa-search text-gray-500"></i>
                        </div>

                            <button class="bg-rose-500 focus:ring-2 focus:ring-rose-300 absolute rounded-xl right-2 top-2 py-1 px-3 text-white">Cari</button>

                            <input type="text" name="search" placeholder="Cari Kelas" class="pl-8 border font-light border-gray-300 focus:ring-rose-500 focus:border-rose-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-rose-500 dark:focus:border-rose-500 w-full rounded-xl h-12">
                        </div>

                    </form>

                    <div class="bg-white ">
                        <div class="grid lg:grid-cols-6 grid-cols-2 gap-4">
                        @foreach($classes as $class)
                            <a href="{{route('classes.student',['classesId' => $class->id])}}">

                                <div class="border rounded-xl p-4 border hover:border-rose-500">

                                    {{ $class->name }}

                                </div>
                            </a>
                        @endforeach
                        </div>

                    </div>
                    <!-- <a href="{{route('classes.student',['classesId' => $class->id])}}" class="block no-underline text-gray-500 px-4 py-2 border rounded-xl capitalize mb-4">
                        <div class="flex items-center justify-between">
                            {{ $class->name }}
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a> -->
                    </div>
                </div>


            </div>
        </div>
        {{-- <div class="hidden">

        </div> --}}

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
