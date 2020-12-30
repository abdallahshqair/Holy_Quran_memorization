@extends('control panel.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper "style="align-items: center">
    @include('control panel.layouts.message')

    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">تعديل طالب</a></li>
                            <li class="breadcrumb-item active">الطلاب</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form method="POST" action="{{route('students.update',$student)}}">
            @method('PUT')
            @csrf

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">تعديل طالب</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">اسم الطالب</label>
                                    <input type="text" id="inputName" name="st_name" class="form-control" value="{{$student->st_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">رقم الهوية</label>
                                    <input type="text" name="st_identity" id="inputClientCompany" class="form-control"  value="{{$student->st_identity}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">رقم الجوال الأب</label>
                                    <input type="text" id="inputProjectLeader" name="st_father_phone" class="form-control" value="{{$student->st_father_phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">رقم الجوال الأم</label>
                                    <input type="text" id="inputProjectLeader"  name="st_mother_phone" class="form-control" value="{{$student->st_mother_phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">تاريخ الميلاد</label>
                                    <input type="date"  name="st_date_of_birth" id="inputProjectLeader" class="form-control" value="{{$student->st_date_of_birth}}">
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">إلغاء</a>
                                <input type="submit" value="تعديل بيانات الطالب" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <!-- /.content -->

        <!-- /.content-wrapper -->


@endsection
