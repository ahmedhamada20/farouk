@extends('admin.layouts.master')
@section('title')
  عملاء في انتظار الموافقه
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   العملاء المنتظرين تفعليهم</span>
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
                            @include('admin.customer.search')
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>رقم الهاتف</th>
                                <th>البريد الالكتورني</th>
                                <th>الحاله</th>
                                
                                  <th>تاريخ الاضافه</th>
                                  <th>العنوان</th>
                                <th>العمليات</th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>

                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        @if($row->type == 'active')
                                            <span class="badge badge-success">  {{$row->type}} </span>
                                        @elseif($row->type == 'waiting')
                                            <span class="badge badge-warning">  {{$row->type}} </span>
                                        @else
                                            <span class="badge badge-danger">  {{$row->type}} </span>
                                        @endif
                                    </td>

    <td>{{$row->created_at->format('Y-m-d')}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>


                                        <button class="btn btn-primary btn-sm" title="تغير الحاله" data-toggle="modal"
                                                data-target="#change{{$row->id}}"><i class="fa fa-eye"></i>
                                        </button>

                                        <button class="btn btn-success btn-sm" title="تعديل بيانات" data-toggle="modal"
                                                data-target="#edit{{$row->id}}"><i class="fa fa-edit"></i>
                                        </button>

                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i>
                                        </button>

                                    </td>
                                    @include('admin.customer.edit')
                                    @include('admin.customer.change')
                                    @include('admin.customer.deleted')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="table-active text-center">No Data !</td>
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

