@extends('control panel.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper " style="align-items: center">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">تعديل محفظ</a></li>
                            <li class="breadcrumb-item active">المحفظين</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form method="POST" action="{{route('teachers.update',$teacher)}}">
            @method('PUT')
            @csrf

            <section class="content">
                @include('control panel.layouts.message')

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">تعديل المحفظ</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">اسم المحفظ</label>
                                    <input type="text" id="inputName" name="te_name" class="form-control"
                                           value="{{$teacher->te_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">رقم الهوية</label>
                                    <input type="text" name="te_identity" id="inputClientCompany" class="form-control"
                                           value="{{$teacher->te_identity}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">رقم الجوال</label>
                                    <input type="text" id="inputProjectLeader" name="te_phone"
                                           class="form-control" value="{{$teacher->te_phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">تاريخ الميلاد</label>
                                    <input type="date" name="te_date_of_birth" id="inputProjectLeader"
                                           class="form-control" value="{{$teacher->te_date_of_birth}}">
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>



                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">إلغاء</a>
                            <input type="submit" value="تعديل بيانات المحفظ" class="btn btn-success float-right">
                        </div>
                    </div>
            </section>
        </form>
    </div>




    <!-- /.content -->

    <!-- /.content-wrapper -->


@endsection
