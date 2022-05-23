<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/datatables.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">0 -->
    <!-- Scripts -->
    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->

    <script src="https://kit.fontawesome.com/59113285e4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script>

</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen bg-gray-100">
        <aside class="shadow fixed inset-y-0 z-20 flex-shrink-0 w-64 top-0 overflow-y-auto bg-white dark:bg-gray-800">
            <div class="shrink-0 flex px-2  mb-2 border h-16">
                <a href="{{ route('dashboard') }}" class="flex no-underline items-center text-black">
                    <x-application-logo class="block h-4 w-auto fill-current text-gray-600" />
                    <div class="font-bold ml-4">SMKS JAMBI Medan</div>
                </a>
            </div>

            <div class="h-full px-2 bg-white rounded dark:bg-gray-800">
                <ul class="space-y-2 pl-0">
                    <li>
                        <a href="#" class="flex items-center no-underline p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i class="fa fa-chart-pie text-gray-500"></i>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <i class="fa fa-gear text-gray-500"></i>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Pengaturan</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/classes" class="flex items-center no-underline p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kelas</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center no-underline p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Periode</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/student" class="flex items-center no-underline p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i class="fa fa-user text-gray-500"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Data Siswa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center no-underline p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="fa fa-credit-card"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center no-underline p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i class="fa fa-print text-gray-500"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
                        </a>
                    </li>

                </ul>
            </div>
        </aside>

        <!-- Page Content -->
        <div class="flex flex-col flex-1 w-full lg:ml-64">
            <header class="fixed z-20 bg-white w-10/12">
                @include('layouts.navigation')

            </header>
            <main class="bg-white max-w-full mx-4 mb-4 mt-24 py-4 px-4 sm:px-6 lg:px-8 rounded-xl">
                {{ $main }}
            </main>
        </div>
    </div>
</body>

{{ $script ?? null }}

</html>
