@extends('admin.layouts.master2')
@section('title')
    Register Information Web Site
@endsection
@section('css')



@endsection
@section('page-header')

    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    <h1> تسجيل بيانات الموقع</h1>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link class="dropdown-item" :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>


                    </form>

                </div>
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        تسجيل بيانات الموقع
                    </div>
                    <br>
                    <form action="{{route('settingSave')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>اسم الموقع بالغه العربيه</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="col">
                                <label>اسم الموقع بالغه الانجليزئيه</label>
                                <input type="text" name="name_en" required class="form-control">
                            </div>

                            <div class="col">
                                <label>البريد الالكتروني</label>
                                <input type="email" name="email" required class="form-control">
                            </div>

                            <div class="col">
                                <label>العنوان</label>
                                <input type="text" name="address" required class="form-control">
                            </div>

                            <div class="col">
                                <label>الهاتف</label>
                                <input type="number" name="phone" required class="form-control">
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>رابط الفيس بوك أن وجد </label>
                                <input type="url" name="facebook" class="form-control">
                            </div>

                            <div class="col">
                                <label> رابط تويتر  أن وجد</label>
                                <input type="url" name="twitter" class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط انستجرام  أن وجد </label>
                                <input type="url" name="instagram" class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط قناه يوتيوب أن وجد</label>
                                <input type="url" name="YouTube" class="form-control">
                            </div>
                        </div>

        

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">

                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">

                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>صوره الموقع</label>
                                <input type="file" name="cover" id="image_updload" accept="image/*" class="form-control">
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">حفظ البيانات</button>
                            </div>
                        </div>

                    </form>
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
        $(function () {
            $("#image_updload").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });
    </script>
@endsection
