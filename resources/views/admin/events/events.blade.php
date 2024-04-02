<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')
<link rel="stylesheet" href="{{ url('assets/admin/css/fullcalendar.min.css') }}">

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Events</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col-auto text-end float-end ms-auto">
                            <a href="{{ url('admin/cms/events/add') }}" class="btn btn-primary">Add New Event</a>
                             <a href="{{ url('admin/cms/events/view') }}" class="btn btn-primary">View Events</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade none-border" id="my_event">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-success save-event submit-btn">Create
                                    event</button>
                                <button type="button" class="btn btn-danger delete-event submit-btn"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @include('admin.admin_layouts.footer2')

    </div>

    @include('admin.admin_layouts.footer')

    <script src="{{ url('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/fullcalendar.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.fullcalendar.js') }}"></script>

</body>

</html>
