@extends('admin.layouts.master')
@section('title')
    اضافه مستخدم جديد
@endsection
@section('css')



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> اضافه مستخدم جديد</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/   اضافه مستخدم جديد</span>
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
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>هناك خطأ</strong> كانت هناك بعض المشاكل في المدخلات الخاصة بك.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">

                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>اسم المستخدم</strong>
                                {!! Form::text('name', null, array('placeholder' => 'اسم المستخدم','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>البريد الالكتورني</strong>
                                {!! Form::text('email', null, array('placeholder' => 'البريد الالكتورني','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>كلمه المورو</strong>
                                {!! Form::password('password', array('placeholder' => 'كلمه المورو','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>تاكيد كلمه المورو</strong>
                                {!! Form::password('confirm-password', array('placeholder' => 'تاكيد كلمه المورو','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>الصلاحيات</strong>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>




    </div>






    <!-- Container closed -->
    </div>

    </div>
    <!-- main-content closed -->
@endsection
@section('js')


@endsection
