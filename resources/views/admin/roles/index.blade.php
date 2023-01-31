@extends('admin.layouts.master')
@section('title')
    صلاحيات المستخدمين
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> صلاحيات المستخدمين</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/  صلاحيات المستخدمين</span>
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
                            @can('create-role')
                                <a class="btn btn-success" href="{{ route('roles.create') }}">اضافه صلاحيه جديده</a>
                            @endcan
                        </div>


                        <div class="col">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>


                    </div>


                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap text-center" id="example1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @forelse($roles as $key => $role)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        @can('edit-role')
                                            <a class="btn btn-primary"
                                               href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        @endcan
                                        @can('deleted-role')
                                            @if(Auth::user()->role != 'Admin')
                                                <p class="text-danger">لا يمكن الحذف</p>
                                            @else
                                                @if(Auth::user()->role == 'Admin')
                                                @else
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endif
                                            @endif

                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="table-active text-center">No Data !</td>
                                </tr>
                            @endforelse
                        </table>
                        {{ $roles->render("pagination::bootstrap-4") }}
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
