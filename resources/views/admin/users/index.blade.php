@extends('admin.layouts.master')
@section('title')
    المستخدمين
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/   المستخدمين</span>
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
                        @can('create-user')
                            <div class="col">
                                <a href="{{route('users.create')}}" class="btn btn-success">اضافه مستخدم جديد</a>
                            </div>
                        @endcan


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
                                <th>اسم المستخدم</th>
                                <th>البريد الالكتورني</th>
                                <th>صلاحيه المستخدم</th>
                                <th>العمليات</th>

                            </tr>
                            </thead>
                            <tbody>


                            @forelse($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        @can('show-user')
                                            <a class="btn btn-info btn-sm" title="عرض"
                                               href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i></a>
                                        @endcan


                                        @can('edit-user')
                                            <a class="btn btn-success btn-sm" title="تعديل"
                                               href="{{ route('users.edit',$user->id) }}"><i class="fa fa-edit"></i></a>
                                        @endcan

                                        @can('deleted-user')
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                            @if($user->role == 'Admin' && Auth::user()->email == 'admin@admin.com')
                                                <p class="text-danger">لا يمكن الحذف</p>

                                            @else

                                                    {!! Form::submit('deleted', ['class' => 'btn btn-danger btn-sm']) !!}


                                            @endif
                                        @endcan



                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="table-active text-center">No Data !</td>
                                </tr>
                            @endforelse
                        </table>
                        {{ $data->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')


@endsection
