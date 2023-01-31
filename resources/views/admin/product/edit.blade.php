@extends('admin.layouts.master')
@section('title')
    تعديل البيانات
@endsection
@section('css')
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
                <div class="card-body">
                    <form action="{{route('product.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col">
                                <label>الاسم بالغه العربيه</label>
                                <input type="text" name="name" value="{{$data->getTranslation('name','ar')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>الاسم بالغه الانجليزيه</label>
                                <input type="text" name="name_en" value="{{$data->getTranslation('name','en')}}"
                                       class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label>رابط فديو</label>
                                <input type="text" name="url"  class="form-control" value="{{$data->url}}">
                            </div>

                            <div class="col">
                                <label>سعر</label>
                                <input type="text" name="price"  class="form-control" value="{{$data->price}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الكلمات المفتاحيه ويجب وضع علامه <strong class="text-danger">,</strong></label>
                                <textarea name="seo" class="form-control">
                                    {{ $data->seo->notes ?? ''}}
                                </textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه العربيه </label>
                                <textarea class="form-control" name="notes" rows="5" id="summernote">
                        {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>الوصف بالغه الانجليزيه</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="summernote2">
                            {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>ملف </label>
                                <input type="file" name="bdf" id="image_updload_bdf" multiple accept="application/pdf" class="file-input-overview">
                                <input type="hidden" name="oldfile_dbf" value="{{$data->bdf->Filename ?? ''}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الصوره</label>
                                <input type="file" name="FilenameMany[]" id="image_updload" multiple accept="image/*"
                                       class="file-input-overview">


                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تحديث</button>
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
                maxFileCount: 10,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
                initialPreview: [
                    @if($data->photos)
                        @foreach($data->photos as $row)
                        "{{asset('admin/pictures/product/' . $data->id . '/'  . $row->Filename)}}",
                    @endforeach

                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',

                initialPreviewConfig: [
                        @if($data->photos)
                        @foreach($data->photos as $row)
                    {
                        caption: "{{$row->Filename}}",
                        size: '111',
                        width: "120px",
                        url: "{{route('product_photo_remove_image',['data_id' => $data->id,'photo_id' => $row->id ,'photo_name' => $row->Filename, '_token' => csrf_token()])}}",
                        key: {{$row->id}}
                    },
                    @endforeach
                    @endif
                ]
            });
        });
    </script>

    <script>
        $(function () {
            $("#image_updload_bdf").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['pdf'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
                initialPreview: [
                    @if($data->pdf)
                        "{{asset('admin/bdf/product/' . $data->id . '/'  . $data->pdf->Filename)}}"
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'pdf',
                @if($data->bdf)
                initialPreviewConfig: [
                    {
                        type: "pdf",
                        caption: "{{$data->pdf->Filename}}",
                        size: '111',
                        width: "120px",
                        url: "{{route('product_remove_image',['data_id' => $data->id,'photo_id' => $data->pdf->id ,'photo_name' => $data->pdf->Filename, '_token' => csrf_token()])}}",
                        key: {{$data->pdf->id}}
                    }
                ]
                @endif

            });
        });
    </script>
@endsection
