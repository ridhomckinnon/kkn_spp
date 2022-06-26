<x-app-layout>
    <x-slot name="heading">
        <a href="/dashboard" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i>
            Kembali</a>
    </x-slot>
    <x-slot name="main">
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                role="alert">
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
        <h2 class="font-bold text-2xl">Rekap Laporan</h2>
        <div class="bg-white rounded-lg p-4 mt-4">
            <form action="{{ route('report.post') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kelas</label>
                    <select id="class" name="class" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">-- Pilih Kelas --</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Bulan</label>
                    <select id="countries" name="bulan" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">-- Pilih Bulan --</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tahun</label>
                    <select id="countries" name="tahun" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">-- Pilih Tahun --</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                    </select>
                </div>

                <button data-modal-toggle="addModal" type="submit"
                    class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-4 py-3 text-center">Download</button>

                <a href="/dashboard"
                    class="no-underline text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-4 py-3 hover:text-gray-900 focus:z-10">Kembali</a>
            </form>
        </div>
    </x-slot>
</x-app-layout>

<script>
    const datepicker_start = document.getElementById('datepicker-start');
    const datepicker_end = document.getElementById('datepicker-end');
    new Datepicker(datepicker_start, {
        // options
    });
    new Datepicker(datepicker_end, {
        // options
    });
</script>
