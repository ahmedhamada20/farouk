@extends('admin.layouts.master')
@section('title')
   طلب اشتراك في باقه
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> طلب اشتراك في باقه </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   عمليات التواصل</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="flash-message"></div>

                    <div class="row">
                        <div class="col">
                            <a href="{{ route('dowmnloadSubcraptionExport') }}" class="btn btn-info">تنزيل البيانات</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الخدمه</th>
                                <th>اسم الباقه</th>
                                <th>الاسم</th>
                                <th>كود الدوله</th>
                                <th>رقم الهاتف</th>
                                  <th>البريد الالكتروني</th>
                                <th>الوظيفه  الحاليه</th>
                                <th>الحاله</th>
                                 <th>تاريخ الاضافه</th>
                                <th>العمليات</th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->courses->name}}</td>
                                    <td>{{$row->packages->name}}</td>
                                    <td>{{$row->name}}</td>
                                     <td>{{$row->country}}</td>
                                    <td>{{$row->phone}}</td>
                                     <td>{{$row->email}}</td>
                                    <td>{{$row->jobs}}</td>
                                    <td>{!!$row->status == 1 ? '<span class="badge badge-success">مفعل</span>' : '<span class="badge badge-primary">في انتظار التفعيل</span>'!!}</td>

                                    <td>{{$row->created_at->format('Y-m-d')}}</td>

                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>

                                            </div>

                                            <div class="col">
                                                <form action="{{ route('deletedSubcraption',$row->id) }}" method="POST">
                                                    @csrf

                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>

                                            </div>
                                        </div>


                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="table-active text-center">No Data !</td>
                                </tr>
                            @endforelse
                        </table>
                        {{ $data->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

    <script>

        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('updateCourseStatus') }}',
                    data: {'status': status, 'user_id': user_id},
                    success: function(data){
                        toastr.success('Data Update Successfully');
                    }
                });
            })
        })
    </script>
@endsection
