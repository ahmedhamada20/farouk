
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{$previous_Work_id->name}} تعديل راي على </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customerReviews.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" value="{{$row->previous_works_id}}" name="previous_id">

                    <div class="row">
                        <div class="col">
                            <label>الاسم الموظف</label>
                            <input type="text" name="name" required value="{{$row->name}}"
                                   class="form-control @error('name') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>اسم الشركه</label>
                            <input type="text" name="company_name" required value="{{$row->company_name}}"
                                   class="form-control @error('company_name') is-invalid @enderror">
                        </div>


                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label>التعليم</label>
                            <input type="text" name="learn"  class="form-control" value="{{$row->learn}}">
                        </div>
                    </div>


                    <br>
                    <div class="row">
                        <div class="col">
                            <label>صوره</label>
                            <input type="file" name="cover" id="image_updload_ro"  accept="image/*" class="file-input-overview">
                            <input type="hidden" name="oldfile" value="{{$row->photo->Filename ?? ''}}">
                            @if($row->image)
                                <a href="{{ $row->image }}">
                                    <img src="{{ $row->image }}" alt="{{ $row->name }}"
                                         class="list-thumbnail border-0" width="50" height="50">
                                </a>
                            @endif
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

@section('js')

    <script>
        $(function () {
            $("#image_updload_ro").fileinput({
                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
                initialPreview: [
                    @if($row->photo)
                        "{{asset('admin/pictures/customerReviews/' . $row->id . '/'  . $row->photo->Filename)}}"
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',

                @if($row->photo)
                initialPreviewConfig: [
                    {
                        caption: "{{$row->photo->Filename}}",
                        size: '111',
                        width: "120px",
                        url: "{{route('customerReviews_photo_remove_image',['data_id' => $row->id,'photo_id' => $row->photo->id ,'photo_name' => $row->photo->Filename, '_token' => csrf_token()])}}",
                        key: {{$row->photo->id}}
                    }
                ]
                @endif

            });
        });
    </script>


@endsection

<!-- Modal -->


