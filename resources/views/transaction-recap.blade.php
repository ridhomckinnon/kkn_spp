@section('title', 'Rekap Transaksi')

<x-app-layout>
    <x-slot name="main">
        <div class="grid grid-cols-4 gap-4">

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Januari</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 1)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Februari</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 5)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Maret</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 3)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">April</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 4)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Mei</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 5)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Juni</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 6)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Juli</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 7)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Agustus</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 8)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">September</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 9)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Oktober</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 10)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">November</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 11)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Desember</div>
                <div class="py-3">
                    <div class="mb-1">{{rupiah($students->period->price_spp)}}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @foreach ($students->transactions as $item)
                            @if ($item->bulan == 12)
                                lunas
                            @else
                                Belum bayar
                            @endif
                        @endforeach
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg">Bayar</button>
            </div>

        </div>



    </x-slot>
</x-app-layout>
