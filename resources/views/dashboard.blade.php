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
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-white lg:flex flex lg:justify-between justify-between items-center shadow rounded-xl p-4">
               <div class="md:block items-center justify-between">
                <p class="text-md font-light mb-4">Peserta Didik</p>
                <p class="text-xl font-bold text-gray-500">{{$student}}</p>
               </div>
               <div><i class="fa fa-graduation-cap fa-xl text-rose-500"></i></div>
            </div>
            <div class="bg-white lg:flex flex lg:justify-between justify-between items-center shadow rounded-xl p-4">
               <div class="md:block items-center justify-between">
                <p class="text-md font-light mb-4">Kompetensi Keahlian</p>
                <p class="text-xl font-bold text-gray-500">{{$jurusan}}</p>
               </div>
               <div><i class="fa fa-laptop-code fa-xl text-rose-500"></i></div>
            </div>
            <div class="bg-white lg:flex flex lg:justify-between justify-between items-center shadow rounded-xl p-4">
               <div class="md:block items-center justify-between">
                <p class="text-md font-light mb-4">Kelas</p>
                <p class="text-xl font-bold text-gray-500">{{$class}}</p>
               </div>
               <div><i class="fa fa-chalkboard-user fa-xl text-rose-500"></i></div>
            </div>
            <div class="bg-white lg:flex flex lg:justify-between justify-between items-center shadow rounded-xl p-4">
               <div class="md:block items-center justify-between">
                <p class="text-md font-light mb-4">Pemasukan Bulan Aktif</p>
                <p class="text-xl font-bold text-gray-500">{{rupiah($transaction)}}</p>
               </div>
               <div><i class="fa fa-circle-dollar-to-slot fa-xl text-rose-500"></i></div>
            </div>

        </div>

        <div class="grid lg:grid-cols-2 gap-4">
            <div class="bg-white shadow rounded-xl p-4">
                <div class="sub-title">
                    <h5 class="font-bold">Transaksi Terakhir</h5>
                </div>
                <div class=" mt-4" style="height:355px">
                    <table class=" table-auto w-full border overflow-hidden rounded-xl">
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
            <div class="bg-white shadow rounded-xl p-4">
                <div class="">
                    <div class="sub-title text-center">
                        <h5 class="font-bold">Kalender</h5>
                    </div>
                    <div class="mt-4">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>


    </x-slot>
</x-app-layout>

<script>
$(document).ready(function () {


    var SITEURL = "{{ url('/') }}";

    /*------------------------------------------
    --------------------------------------------
    CSRF Token Setup
    --------------------------------------------
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*------------------------------------------
    --------------------------------------------
    FullCalender JS Code
    --------------------------------------------
    --------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/fullcalender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");

                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true);

                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }

                });

    });

    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
</script>
