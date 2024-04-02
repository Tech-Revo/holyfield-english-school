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
                            <h3 class="page-title">@lang('translation.edit') @lang('translation.events')</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/cms/events/view') }}">@lang('translation.events')</a></li>
                                <li class="breadcrumb-item active">@lang('translation.add_new_event')</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('admin/cms/events/update') }}/{{$event->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Event Information</span></h5>
                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Event Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control" name="event_name" value="{{$event->event_name}}">
                                                @error('event_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Start Time <span class="login-danger">*</span></label>
                                                <input type="time" id="start_time" class="form-control" value="{{$event->start_time}}"
                                                    name="start_time" >
                                                @error('start_time')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>End Time <span class="login-danger">*</span></label>
                                                <input type="time" class="form-control" name="end_time" value="{{$event->end_time}}">
                                                @error('end_time')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Event Address/Vanue <span class="login-danger">*</span></label>
                                                <input type="text" id="start_time" class="form-control" value="{{$event->address}}"
                                                    name="event_address">
                                                @error('event_address')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Event Date <span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text"
                                                    name="event_date" placeholder="DD-MM-YYYY" value="{{$event->event_date}}">
                                                @error('event_date')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="student-submit">
                                                 <a href="{{url('admin/cms/events/view')}}" class="btn btn-primary">Return Back</a>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('admin.admin_layouts.footer2')

    </div>

   
    @include('admin.admin_layouts.footer')
  

</body>

</html>
