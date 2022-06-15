<x-app-layout>
    <x-slot name="main">
        <x-slot name="heading">
            <div class="flex items-center">
                <div class="bg-rose-500 text-white rounded-xl p-2 mr-2">
                    <i class="fa fa-chart-pie fa-xl"></i>
                </div>
                <h3 class="font-bold">Dashboard</h3>
            </div>
        </x-slot>
        <div class="grid grid-cols-4 gap-4 mb-4">
            <div class="border shadow rounded-xl p-4">
               <div class="lg:flex sm:block items-center justify-between">
                <h4>Siswa</h4>
                <h3 class="text-gray-500">{{$student}}</h3>
               </div>
            </div>
            <div class="border shadow rounded-xl p-4">
               <div class="lg:flex sm:block items-center justify-between">
                <h4>Jurusan</h4>
                <h3 class="text-gray-500">{{$jurusan}}</h3>
               </div>
            </div>
            <div class="border shadow rounded-xl p-4">
               <div class="lg:flex sm:block items-center justify-between">
                <h4>Kelas</h4>
                <h3 class="text-gray-500">{{$class}}</h3>
               </div>
            </div>
            <div class="border shadow rounded-xl p-4">
               <div class="lg:flex sm:block items-center justify-between">
                <h4>Pemasukan</h4>
                <h3 class="text-base text-gray-500">{{rupiah($transaction)}}</h3>
               </div>
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="border shadow rounded-xl p-4">
                <div class="sub-title">
                    <h5 class="font-bold">Transaksi Terakhir</h5>
                </div>
                <div class="table -xl mt-4" style="height:355px">
                    <table id="" class="table-auto w-full border overflow-hidden rounded-xl">
                        <thead class="bg-slate-100 text-white border-b">
                            <th class="font-bold p-2 pl-2 text-gray-500 text-left">#</th>
                            <th class="font-bold p-2 pl-2 text-gray-500 text-left">Tanggal</th>
                            <th class="font-bold p-2 pl-2 text-gray-500 text-left">Jumlah</th>
                        </thead>
                        <tbody>
                            <td class="text-left font-light p-2 border-b border-slate-100">1</td>
                            <td class="text-left font-light p-2 border-b border-slate-100">Rp. 20000</td>
                            <td class="text-left font-light p-2 border-b border-slate-100">14-06-2022</td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="border shadow rounded-xl p-4">
                <div class="">
                    <div class="sub-title">
                        <h5 class="font-bold">Kalender</h5>
                    </div>
                    <div class="mt-4" style="height:355px;width:100%">
                        <div class="datepicker" id="datepickerId" inline-datepicker data-date="now()" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>


    </x-slot>
</x-app-layout>

<script>
    const datepickerEl = document.getElementById('datepickerId');
    new Datepicker(datepickerEl, {
        // format: 'mm/dd/yyyy' // "setDate" : new Date(),
    });
</script>
