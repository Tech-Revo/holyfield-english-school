<!DOCTYPE html>
<html lang="en">

@include('admin.admin_layouts.header')
<link rel="stylesheet" href="{{ url('assets/admin/css/ckeditor.css') }}">

<body>

    <div class="main-wrapper">

        @include('admin.admin_layouts.nav')


        @include('admin.admin_layouts.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="student-group-form">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search by Name ...">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="search-student-btn">
                                <button type="btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>

                        <div class="col-lg-2 text-end float-end ms-auto">
                            <div class="search-student-btn">
                                <a href="{{ url('admin/cms/gallery/add') }}" class="btn btn-primary">Add New Image</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">





                    <div class="card card-table table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Profile Image</th>
                                    <th>Title</th>

                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>

                                @forelse ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td>


                                            <img src="{{ $gallery->getFirstMediaUrl('gallery_image', 'preview') }}"
                                                alt="Teacher" style="max-width: 60px;">

                                        </td>


                                        <td>{{ $gallery->title }}</td>

                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{ url('admin/teachers/view/') }}/{{ $gallery->id }}"
                                                    class="btn btn-sm bg-success-light me-2">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                {{-- <a href="edit-teacher.html" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a> --}}
                                            </div>
                                        </td>

                                    </tr>
                                @empty
                                    <td colspan="7">
                                        <img src="{{ url('assets/school/img/Empty-rafiki.png') }}"
                                            class="img-fluid mx-auto d-block" alt="Empty Data" style="max-width: 40%" />
                                    </td>
                                @endforelse

                            </tbody>

                        </table>
                        {{ $galleries->links('pagination::bootstrap-5') }}












                    </div>
                </div>





            </div>
        </div>



        @include('admin.admin_layouts.footer2')

    </div>

    @include('admin.admin_layouts.footer')




</body>

</html>
