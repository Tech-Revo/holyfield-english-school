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
                            <h3 class="page-title">Gallery</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">

                        <style>
                            #gallery_image {
                                text-align: center;
                                padding: 3%;
                                border: thin solid black;
                            }

                            input[type="file"] {
                                display: none;
                            }

                            label {
                                cursor: pointer;
                            }

                            #imageName {
                                color: green;
                            }
                        </style>




                        <form action="{{ url('admin/cms/gallery') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Title<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="title">
                                                        @error('title')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Tags<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="tags">
                                                        @error('tags')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">

                                                    <div id="gallery_image">
                                                        <label for="inputTag">
                                                            Select Image <br />
                                                            <i class="fa fa-2x fa-camera"></i>
                                                            <input id="inputTag" type="file" name="gallery_image" />
                                                            <br />
                                                            <span id="imageName"></span>
                                                        </label>
                                                    </div>
                                                    @error('gallery_image')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">


                                        <a href="{{ url('admin/cms/gallery') }}" class="btn bank-cancel-btn me-2">Return
                                            Back</a>
                                        <button type="submit" class="btn bank-cancel-btn me-2">Publish</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script>
            let input = document.getElementById("inputTag");
            let imageName = document.getElementById("imageName")

            input.addEventListener("change", () => {
                let inputImage = document.querySelector("input[type=file]").files[0];

                imageName.innerText = inputImage.name;
            })
        </script>



        @include('admin.admin_layouts.footer2')

    </div>
    <script src="{{ url('assets/admin/js/ckeditor.js') }}"></script>

    @include('admin.admin_layouts.footer')


</body>

</html>
