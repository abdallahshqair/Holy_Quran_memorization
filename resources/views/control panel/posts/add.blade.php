
@extends('control panel.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper "style="align-items: center">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">إضافة خبر</a></li>
                            <li class="breadcrumb-item active">الأخبار</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form method="POST" action="{{route('posts.store')}}"enctype="multipart/form-data">
            @csrf
            <section class="content">
                @include('control panel.layouts.message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">إضافة خبر</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">عنوان الخبر</label>
                                    <input type="text" id="inputName" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">محتوى الخبر</label>
                                    <textarea rows="4" name="body" id="inputClientCompany" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">إضافة صورة</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image_post" class="custom-file-input" id="ImageFile">
                                            <label class="custom-file-label" for="exampleInputFile">إختار الصورة</label>
                                        </div>

                                    </div>
                                </div>


                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">إلغاء</a>
                                <input type="submit" value="إضافة الخبر" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection





