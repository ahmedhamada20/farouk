@extends('admin.layouts.master')
@section('title')
    مميزات الباقه
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> مميزات الباقه <strong
                        class="text-danger">{{$package->name}}</strong></h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/   مميزات الباقه</span>
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
    <div class="row">
        <div class="col">
            <a href="{{route('packages.index')}}" class="btn btn-success">الرجوع للباقات</a>
        </div>
    </div>
</div>
                <div class="card-body">
                    <form action="{{route('featuresPackages.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="package_id" value="{{$package->id}}">


                        <div class="repeater">
                            <div data-repeater-list="List_rooms">
                                <div data-repeater-item>

                                    <div class="row">
                                        <div class="col">
                                            <label>الاسم الميزه بالغه العربيه</label>
                                            <input type="text" name="name" required value="{{old('name')}}"
                                                   class="form-control @error('name') is-invalid @enderror">
                                        </div>

                                        <div class="col">
                                            <label>الاسم الميزه بالغه الانجليزيه</label>
                                            <input type="text" name="name_en" required value="{{old('name')}}"
                                                   class="form-control @error('name') is-invalid @enderror">
                                        </div>


                                        <div class="col mt-4">
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                   type="button" value="حذف العنصر"/>
                                        </div>
                                    </div>

                                    <br>
                                </div>
                            </div>

                            <br>

                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="btn btn-info" data-repeater-create type="button" value="اضافه ميزه جديده"/>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button class="btn btn-success">حفظ البيانات</button>
                            </div>

                        </div>

                    </form>


                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>

                                    <td>
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$row->id}}"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i></button>
                                    </td>
                                    @include('admin.featuresPackages.edit')
                                    @include('admin.featuresPackages.deleted')

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="table-active text-center">No Data !</td>
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
    <script src="{{asset('admin/assets/js/plugins-jquery.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    <script type="text/javascript">var plugin_path = '{{ asset('admin/assets/js') }}/';</script>

@endsection
