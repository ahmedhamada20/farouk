@extends('admin.layouts.master')
@section('title')
   استقصاء تطوير المواقع
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> استقصاء تطوير المواقع </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   استقصاء تطوير المواقع</span>
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
                            <a href="{{ route('domload_affterSalreesHepa') }}" class="btn btn-info">تنزيل البيانات</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الإسم</th>
                                <th>رقم الهاتف</th>
                                <th>السوال الاول</th>
                                <th>الاجابه الاولي</th>
                                <th>ناريخ التسجيل</th>
                                <th>العمليات</th>
                                {{--                                <th>تاريخ التسجيل</th>--}}


                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->server_phone}}</td>
                                    <td>{{$row->name_1}}</td>
                                    <td>{{$row->server_1}}</td>
                                    <td>{{$row->created_at ?? null}}</td>


                                    <td>

                                        <form action="{{route('affterSalreesHepadeleted')}}" method="post">
                                            @csrf

                                            <input type="hidden" value="{{$row->id}}" name="id">
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>

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


@endsection
