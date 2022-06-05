@section('title', 'Rekap Transaksi')

<x-app-layout>
    <x-slot name="main">
        <div class="grid grid-cols-4 gap-4">

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Januari</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 1)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif

                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Februari</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 2)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Maret</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 3)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">April</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 4)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Mei</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 5)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Juni</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 6)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Juli</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 7)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Agustus</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 8)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">September</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 9)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Oktober</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 10)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">November</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 11)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>

            <div class="border border-b-0 rounded-lg text-center mb-4">
                <div class="bg-gray-100 py-2">Desember</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($students->transactions->count() > 0)
                            @foreach ($students->transactions as $item)
                                @if ($item->bulan == 12)
                                    lunas
                                @else
                                    Belum bayar
                                @endif
                            @endforeach
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg" type="button" data-modal-toggle="payModal">Bayar</button>
            </div>
            <div id="payModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Form Pembayaran
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="payModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <form class="space-y-6" action="{{ route('post.classes') }}" method="POST">
                            <div class="p-6 space-y-6">
                                @csrf
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                </div>
                                <div>
                                    <input type="number" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="100000" disabled required>
                                </div>
                                <div>
                                    <input type="number" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="22-02-2022" required>
                                </div>

                            </div>

                            <div
                                class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button data-modal-toggle="payModal" type="submit"
                                    class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                                <button data-modal-toggle="payModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </x-slot>
</x-app-layout>
