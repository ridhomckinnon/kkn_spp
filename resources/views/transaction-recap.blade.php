@section('title', 'Rekap Transaksi')

<x-app-layout>
    <x-slot name="heading">
        <a href="" class="no-underline text-rose-500 hover:text-rose-700"><i class="fa fa-arrow-left"></i> Kembali</a>
    </x-slot>
    <x-slot name="main">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="grid grid-cols-4 gap-4">
            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Januari</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 1))
                            Lunas
                        @else
                            belum bayar
                        @endif

                    </span>
                </div>

                @if ($transactions->contains('bulan', 1))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 1, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="1" data-tahun="{{ $year }}">Bayar</button>
                @endif


            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Februari</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 2))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 2))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 2, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="2" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Maret</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 3))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 3))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 3, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="3" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">April</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 4))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 4))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 4, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="4" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Mei</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 5))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 5))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 5, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="5" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Juni</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 6))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 6))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 6, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="6" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Juli</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 7))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 7))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 7, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="7" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Agustus</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 8))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 8))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 8, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="8" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">September</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 9))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 9))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 9, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="9" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Oktober</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 10))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 10))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 10, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="10" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">November</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 11))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 11))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 11, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="11" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>

            <div class="border border-b-0 rounded-lg text-center">
                <div class="bg-gray-100 py-2">Desember</div>
                <div class="py-3">
                    <div class="mb-1">{{ rupiah($student->period->price_spp) }}</div>
                    <span class="bg-sky-200 rounded-lg pb-1 text-white px-2">
                        @if ($transactions->contains('bulan', 12))
                            Lunas
                        @else
                            belum bayar
                        @endif
                    </span>
                </div>
                @if ($transactions->contains('bulan', 12))
                    <button
                        onclick="location.href='{{ route('transaction.destroy', ['bulan' => 12, 'tahun' => $year, 'idStudent' => $student->id]) }}'"
                        class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" data-bulan="1"
                        data-tahun="{{ $year }}">Batalkan Transaksi</button>
                @else
                    <button class="bg-emerald-400 py-2 w-full text-white rounded-b-lg payModal" type="button"
                        data-modal-toggle="payModal" data-bulan="12" data-tahun="{{ $year }}">Bayar</button>
                @endif
            </div>



            <div id="payModal" data-bulan="" t data-tahun="{{ $year }}" abindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Form Pembayaran
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="payModal" data-bulan="">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <form class="space-y-6"
                            action="{{ route('transaction.payment', ['idStudent' => $student->id]) }}" method="POST">
                            <div class="p-6 space-y-6">
                                @csrf
                                <input type="hidden" name="bulan" value="" id="bulan">
                                <input type="hidden" name="tahun" value="{{ $year }}" id="tahun">
                                <input type="hidden" name="id_classes" value="{{ $students->classes->id }}"
                                    id="tahun">
                                <div class="relative">
                                    <!-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input id="datepicker" name="payment_date" type="text" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal"> -->
                                    <input name="payment_date" type="date" class="datepicker bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">

                                </div>
                                <div>
                                    <input type="number" name="jumlah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="{{ $students->period->price_spp }}" readonly
                                        value="{{ $students->period->price_spp }}">
                                </div>
                                <div>
                                    <textarea type="text" name="description"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Deskripsi"></textarea>
                                </div>

                            </div>

                            <div
                                class="flex items-center justify-center py-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                <button data-modal-toggle="payModal" data-bulan="" t data-tahun="{{ $year }}"
                                    ype="submit"
                                    class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-6 py-3 text-center">Simpan</button>
                                <button data-modal-toggle="payModal" data-bulan="" t data-tahun="{{ $year }}"
                                    ype="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-md font-medium px-6 py-3 hover:text-gray-900 focus:z-10 ">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

    <x-slot name="script">
        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Confirm Delete
                $(".payModal").click(function() {
                    var bulan = $(this).data('bulan');
                    $("#bulan").val(bulan)
                });


                // $('.payModal').click(function() {
                //     var id = $(this).data('id')
                //     var url = $(this).data('url')
                //     $.get(url + "/student/" + id, function({
                //         data
                //     }) {
                //         $('#idStudent').val(data.id);
                //     })
                // })
            });
            const datepicker = document.getElementById('datepicker');
                    new Datepicker(datepicker, {
                    // options
                });
        </script>
    </x-slot>
</x-app-layout>
<script>
    const datepicker = document.getElementById('datepicker');
    new Datepicker(datepicker, {
        // options
    });

</script>
