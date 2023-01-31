@extends('admin.layouts.master')
@section('title')
  اراء العملاء
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> اراء العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  اراء العملاء</span>
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
                            <button data-toggle="modal" data-target="#add" class="btn btn-success">اضافه جديده</button>

                        </div>
                        @include('admin.customerReviews.create')
                    </div>

                    <div class="row">
                        <div class="col">
{{--                            @include('admin.product.search')--}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>photo</th>
                                <th>name</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>
                                        @if($row->image)
                                            <a href="{{ $row->image }}">
                                                <img src="{{ $row->image }}" alt="{{ $row->name }}"
                                                     class="list-thumbnail border-0" width="50" height="50">
                                            </a>
                                        @endif
                                    </td>
                                    <td>{{$row->name}}</td>

                                    <td>
                                        @if($row->file)
                                            <a href="{{ $row->file }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        @endif
                                        <button data-toggle="modal" data-target="#edit{{$row->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('admin.customerReviews.deleted')
                                    @include('admin.customerReviews.edit')

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

    <script>

        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('status');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('updateCustomerReviewsStatus') }}',
                    data: {'status': status, 'user_id': user_id},
                    success: function(data){
                        toastr.success('Data Update Successfully');
                    }
                });
            })
        })
    </script>
@endsection
