@extends('admin.layouts.master')
@section('title')
    التذاكر
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
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

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>رقم التذكره</th>
                                <th>الفئه</th>
                                <th>الحاله</th>
                                <th>العمليات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->customer->name}}</td>
                                    <td>{{$row->ticketNumbers}}</td>
                                    <td>{{$row->category->name}}</td>
                                    <td>
                                        @if($row->status == 'padding')
                                            <span class="badge badge-warning p-2">في انتظار الرد</span>
                                        @elseif($row->status == 'review')
                                            <span class="badge badge-primary p-2">تم مشاهده طلبكم</span>
                                        @elseif($row->status == 'accepted')
                                            <span class="badge badge-success p-2">تم الرد على طلبك</span>
                                        @elseif($row->status == 'completed')
                                            <span class="badge badge-info p-2">تم تنفيذ طلبك</span>
                                        @else
                                            <span class="badge badge-danger p-2">تم الغاء طلبك</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('requestTicks.show',$row->ticketNumbers)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
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
