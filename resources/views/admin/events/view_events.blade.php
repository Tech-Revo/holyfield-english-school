<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')
<link rel="stylesheet" href="{{ url('assets/admin/css/fullcalendar.min.css') }}">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">@lang('translation.events')</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">@lang('translation.dashboard')</a></li>
                                <li class="breadcrumb-item active">@lang('translation.events')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col-auto text-end float-end ms-auto">
                            <a href="{{ url('admin/cms/events/add') }}" class="btn btn-primary">@lang('translation.add_new_event')</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped custom-table" id="table_data">
                                        <thead>
                                            <tr>
                                                <th>@lang('translation.id')</th>
                                                <th>@lang('translation.event_name')</th>
                                                <th>@lang('translation.start_time')</th>
                                                <th>@lang('translation.end_time')</th>
                                                <th>@lang('translation.event_date')</th>
                                                <th>@lang('translation.event_address')</th>
                                                <th>@lang('translation.published_by')</th>
                                                <th>@lang('translation.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>



        <script>
            $(document).ready(function() {
                $('#table_data').DataTable({
                    ajax: {
                        url: '/admin/cms/events/view/data',
                        type: 'GET',
                        dataType: 'json',
                        processing: true,
                        serverSide: true,
                    },
                    processing: true,

                    "columns": [{
                            "data": "id"
                        },
                        {
                            data: "event_name",

                        },
                        {
                            data: "start_time",

                        },
                        {
                            data: "end_time",

                        },
                        {
                            "data": "event_date"
                        },
                        {
                            "data": "address"
                        },
                        {
                            "data": "published_by"
                        },

                        {
                            data: null,
                            render: function(data, type, row) {
                                return '<button class="btn btn-danger btn-sm" onclick="deleteAccess(' +
                                    row.id +
                                    ')">@lang('translation.delete')</button> <button class="btn btn-warning btn-sm" onclick="viewDeliveryTime(' +
                                    row.id + ')">@lang('translation.edit')</button>';
                            }
                        }


                    ],
                    order: [
                        [0, 'desc']
                    ],
                    "dom": 'Bfrtip',
                    "buttons": [{
                            "extend": 'copyHtml5',
                            "title": 'Data'
                        },
                        {
                            "extend": 'excelHtml5',
                            "title": 'Data'
                        },
                        {
                            "extend": 'csvHtml5',
                            "title": 'Data'
                        },
                        {
                            "extend": 'pdfHtml5',
                            "title": 'Data'
                        },
                        {
                            "extend": 'print',
                            "title": 'Print'
                        }
                    ]
                });
            });

            function deleteAccess(id) {
                if (confirm('Are you sure you want to delete this event?')) {
                    $.ajax({
                        url: '/admin/delivery-time/delete/' + id,
                        type: 'GET',
                        data: {
                            _method: 'DELETE'
                        },
                        success: function(response) {
                            if (response.status === 'success') {

                                $('#table_data').DataTable().ajax.reload();
                            } else {

                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            }
        </script>


        @include('admin.admin_layouts.footer2')

    </div>
    <script src="{{ url('assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/feather.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/script.js') }}"></script>
    <script src="{{ url('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/filepond.js') }}"></script>
    <script src="{{ url('assets/admin/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/chart-data.js') }}"></script>


</body>

</html>
