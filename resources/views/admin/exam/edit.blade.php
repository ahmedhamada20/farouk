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
                    <form action="{{route('exam.update','exam')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
    
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <div class="row">
                            <div class="col">
                                <label>الاسم الامتحان بالغه العربيه</label>
                                <input type="text" name="name"  value="  {{$data->getTranslation('name','ar')}}"
                                    class="form-control @error('name') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاسم الامتحان بالغه الانجليزيه</label>
                                <input type="text" name="name_en"  value=" {{$data->getTranslation('name','en')}}"
                                    class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>
    
                        <br>
    
                        <div class="row">
                            <div class="col">
                                <label>الاجابه الصحيحه بالغه العربيه</label>
                                <input type="text" name="answer"  value=" {{$data->getTranslation('answer','ar')}}"
                                    class="form-control @error('answer') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاجابه الصحيحه بالغه الانجليزيه</label>
                                <input type="text" name="answer_en"  value="{{$data->getTranslation('answer','en')}}"
                                    class="form-control @error('answer') is-invalid @enderror">
                            </div>
                        </div>
                        <br>
    
                        <div class="row">
                            <div class="col">
                                <label>الاجابه الاولي بالغه العربيه</label>
                                <input type="text" name="answer_one" required value="{{$data->getTranslation('answer_one','ar')}}"
                                    class="form-control @error('answer_one') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاجابه الاولي بالغه الانجليزيه</label>
                                <input type="text" name="answer_one_en" required value="{{$data->getTranslation('answer_one','en')}}"
                                    class="form-control @error('answer_one') is-invalid @enderror">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الاجابه الثانيه بالغه العربيه</label>
                                <input type="text" name="answer_two" required value="{{$data->getTranslation('answer_two','ar')}}"
                                    class="form-control @error('answer_two') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاجابه الثانيه بالغه الانجليزيه</label>
                                <input type="text" name="answer_two_en" required value="{{$data->getTranslation('answer_two','en')}}"
                                    class="form-control @error('answer_two') is-invalid @enderror">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الاجابه الثالثه بالغه العربيه</label>
                                <input type="text" name="answer_there" value="{{$data->getTranslation('answer_there','ar')}}"
                                    class="form-control @error('answer_there') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاجابه الثالثه بالغه الانجليزيه</label>
                                <input type="text" name="answer_there_en" value="{{$data->getTranslation('answer_there','en')}}"
                                    class="form-control @error('answer_there') is-invalid @enderror">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الاجابه الرابعه بالغه العربيه</label>
                                <input type="text" name="answer_four" value="{{$data->getTranslation('answer_four','ar')}}"
                                    class="form-control @error('answer_four') is-invalid @enderror">
                            </div>
    
                            <div class="col">
                                <label>الاجابه الرابعه بالغه الانجليزيه</label>
                                <input type="text" name="answer_four_en" value="{{$data->getTranslation('answer_four','en')}}"
                                    class="form-control @error('answer_four') is-invalid @enderror">
                            </div>
                        </div>
                        <br>
    
                        <div class="row">
                            <div class="col">
                                <label>وقت الامتحان</label>
                                <input type="number" name="time" value="{{ $data->time }}" class="form-control" id="">
                            </div>
    
                            {{-- <div class="col">
                                <label>حاله الامتحان</label>
                                <select class="form-control" required name="status">
                                    <option value="" disabled selected>-- اختر من القائمه --</option>
                                    <option value="1" {{ $data->status == 1 ? 'selected' : null }}>نشط</option>
                                    <option value="0" {{ $data->status == 0 ? 'selected' : null }}>غير نشط</option>
                                </select>
                            </div> --}}
                        </div>
    
    
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تعديل البيانات</button>
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
                        "{{asset('admin/pictures/aboutUs/' . $data->id . '/'  . $data->photo->Filename)}}"
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
                        url: "{{route('aboutUs_remove_image',['data_id' => $data->id,'photo_id' => $data->photo->id ,'photo_name' => $data->photo->Filename, '_token' => csrf_token()])}}",
                        key: {{$data->photo->id}}
                    }
                ]
                @endif

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
                        "{{asset('admin/bdf/aboutUs/' . $data->id . '/'  . $data->pdf->Filename)}}"
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
                        url: "{{route('aboutUs_remove_image',['data_id' => $data->id,'photo_id' => $data->pdf->id ,'photo_name' => $data->pdf->Filename, '_token' => csrf_token()])}}",
                        key: {{$data->bdf->id}}
                    }
                ]
                @endif

            });
        });
    </script>
@endsection
