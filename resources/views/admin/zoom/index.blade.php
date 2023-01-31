@extends('admin.layouts.master')
@section('css')
@endsection
@section('title')
الحصص الاون لاين
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
            <div class="row">
                <div class="col">
                    <a href="{{ route('zoom.create') }}" class="btn btn-success">اضافه حصه اون لاين</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table text-md-nowrap text-center" id="example1">
                    <thead>
                    <tr>
                        <th>#</th>
                 
                        <th>اسم الحصه</th>
                        <th>انضم الان</th>
                       

                    </tr>
                    </thead>
                    <tbody>

                    @forelse($data as $row)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                          
                            <td>{{$row->topic}}</td>
                           <td>
                            <a href="{{$row->start_url}}">
                                انضم الان
                            </a>
                           </td> 
                           
                            {{-- @include('admin.zoom.deleted') --}}

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
