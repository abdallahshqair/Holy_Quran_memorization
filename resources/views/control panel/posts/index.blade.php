@extends('control panel.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">عرض جميع الأخبار</a></li>
                            <li class="breadcrumb-item active">الأخبار</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">الأخبار</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                العدد
                            </th>
                            <th style="width: 20%">العنوان</th>
                            <th style="width: 30%">المحتوى</th>
                            <th style="width: 5%">مٌنشأ الخبر</th>
                            <th style="width: 10%">تاريخ الإنشاء</th>

                            <th style="width: 15%"></th>
                            {{--                            <th style="width: 20%"></th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><a>{{$post->title}}</a></td>
                                <td class="project_progress">{{$post->body}}</td>
                                <td>{{$post->author_email}}</td>
                                <td>{{$post->created_at}}</td>



                                <td class="project-actions text-right">
                                    <form action="{{route('posts.destroy',$post)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('posts.edit',$post)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            تعديل
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm">حذف</button>


                                    </form>

                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


