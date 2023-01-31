@extends('admin.layouts.master')
@section('title')
    الاعدادات الرئسيه
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> الاعدادات الرئسيه</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/  الاعدادات الرئسيه</span>
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
                <div class="card-body">
                    <form action="{{route('setting.update','test')}}" method="post"  enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label> اسم الموقع بالغه العربيه</label>
                                <input type="text" name="name" required value="{{$data->getTranslation('name','ar')}}" class="form-control">
                            </div>


                            <div class="col">
                                <label> اسم الموقع بالغه الانجلزئيه</label>
                                <input type="text" name="name_en" required value="{{$data->getTranslation('name','en')}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>البريد الالكتروني</label>
                                <input type="email" name="email" required value="{{$data->email}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>العنوان</label>
                                <input type="text" name="address" required value="{{$data->address}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>رقم الهاتف</label>
                                <input type="number" name="phone" required value="{{$data->phone}}" class="form-control">
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>رابط الفيس بوك  </label>
                                <input type="url" name="facebook" value="{{$data->facebook}}" class="form-control">
                            </div>

                            <div class="col">
                                <label> رابط تويتر  </label>
                                <input type="url" name="twitter" value="{{$data->twitter}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط انستجرام   </label>
                                <input type="url" name="instagram" value="{{$data->instagram}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>رابط قناه يوتيوب </label>
                                <input type="url" name="YouTube" value="{{$data->YouTube}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>وصف الموقع بالعربي</label>
                                <textarea name="notes" class="form-control" id="summernote">
                                      {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <label>وصف الموقع بالانجليزي</label>
                                <textarea name="notes_en" class="form-control" id="summernote2">
                                  {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>صوره الموقع</label>
                                <input type="file" name="cover" id="image_updload" multiple accept="image/*" class="file-input-overview">
                                <input type="hidden" name="oldfile" value="{{$data->photo->Filename ?? ''}}">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تعديل</button>
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
                initialPreview: [
                    @if($data->photo)
                        "{{asset('admin/pictures/setting/' . $data->id . '/'  . $data->photo->Filename)}}"
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',

                @if($data->photo)
                initialPreviewConfig: [
                    {
                        caption: "{{$data->photo->Filename}}",
                        size: '111',
                        width: "120px",
                        url: "{{route('setting_remove_image',['data_id' => $data->id,'photo_id' => $data->photo->id ,'photo_name' => $data->photo->Filename, '_token' => csrf_token()])}}",
                        key: {{$data->photo->id}}
                    }
                ]
                @endif

            });
        });
    </script>
@endsection
