@extends('front.user.master')

@section('title')
    تعديل الملف الشخصي
@endsection

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">ملفي الشخصي</h4>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
       <div class="col">
           <div class="card">
               <div class="card-body">
                   <form action="{{route('UpdateProfile')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                       @csrf

                       <div class="row">
                           <div class="col">
                               <label>اسمك</label>
                               <input type="text" name="name" value="{{$customer->name ?? null}}" class="form-control">
                           </div>

                           <div class="col">
                               <label>البريد الالكتروني</label>
                               <input type="text" class="form-control" readonly value="{{$customer->email ?? null}}">
                           </div>
                       </div>

                       <br>

                       <div class="row">
                           <div class="col">
                               <label>رقم الهاتف</label>
                               <input type="text"  value="{{$customer->phone ?? null}}" readonly class="form-control">
                           </div>

                           <div class="col">
                               <label>العنوان</label>
                               <input type="text" class="form-control" name="address" value="{{$customer->address ?? null}}">
                           </div>
                       </div>

                       <br>

                       <div class="row">
                           <div class="col">
                               <label>تغيير كلمة المرور</label>
                               <input type="password" name="password" class="form-control">
                           </div>
                       </div>

                       <br>

                       <div class="row">
                           <div class="col">
                               <label>الصوره الشخصيه</label>
                               <input type="file" name="image" class="form-control">
                           </div>

                           <div class="col">
                               <img src="{{asset('project/public/public/profile/'.auth('customer')->user()->image)}}" width="100px" height="100px" alt="">
                           </div>
                       </div>

                       <br>

                       <div class="row">
                           <div class="col-3 offset-2">
                               <button class="btn btn-success text-center">تحديث بيانتي</button>
                           </div>
                       </div>

                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection

@section('js')
@endsection
