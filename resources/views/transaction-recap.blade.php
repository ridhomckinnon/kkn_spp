@section('title','Rekap Transaksi')

<x-app-layout>
    <x-slot name="main">
        <div class="grid grid-cols-4 grid-flow-col gap-4">

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Januari</div>
                <div class="py-3">
                    <div class="mb-1">Rp. 200.000</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">Lunas</span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

        </div>

    </x-slot>
</x-app-layout>
