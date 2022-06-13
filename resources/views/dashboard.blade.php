<x-app-layout>
    <x-slot name="main">
        <x-slot name="heading">
            <div class="flex items-center">
                <div class="bg-rose-500 text-white rounded-xl p-2 me-2">
                    <i class="fa fa-chart-pie fa-xl"></i>
                </div>
                <h3 class="font-bold">Dashboard</h3>
            </div>
        </x-slot>
        <div class="grid grid-cols-4 gap-4 mb-4">
            <div class="border shadow-md rounded-xl p-4">
               <div class="flex items-center justify-between">
                <h4>Siswa</h4>
                <h3 class="text-gray-500">{{$student}}</h3>
               </div>
            </div>
            <div class="border shadow-md rounded-xl p-4">
               <div class="flex items-center justify-between">
                <h4>Jurusan</h4>
                <h3 class="text-gray-500">{{$jurusan}}</h3>
               </div>
            </div>
            <div class="border shadow-md rounded-xl p-4">
               <div class="flex items-center justify-between">
                <h4>Kelas</h4>
                <h3 class="text-gray-500">{{$class}}</h3>
               </div>
            </div>
            <div class="border shadow-md rounded-xl p-4">
               <div class="flex items-center justify-between">
                <h4>Pemasukan</h4>
                <h3 class="text-base text-gray-500">{{rupiah($transaction)}}</h3>
               </div>
            </div>

        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="basis-1/2 hover:basis-1/2">
                    <div class="sub-title">

                        <h5 class="font-bold">Kalender SMKS Jambi Medan</h5>
                    </div>
                    <div class="border shadow-md rounded-xl p-4 mt-4">
                        dads
                    </div>
                </div>
            </div>
            <!-- ... -->
            <div>
                <div class="basis-1/2 hover:basis-1/2">
                    <div class="sub-title">

                        <h5 class="font-bold">Kalender SMKS Jambi Medan</h5>
                    </div>
                    <div class="border shadow-md rounded-xl p-4 mt-4">
                        dads
                    </div>
                </div>
            </div>
          </div>



    </x-slot>
</x-app-layout>
