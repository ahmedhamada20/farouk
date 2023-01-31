<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{$previous_Work_id->name}} اضافه راي على </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customerReviews.store')}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" value="{{$previous_Work_id->id}}" name="previous_id">

                    <div class="row">
                        <div class="col">
                            <label>الاسم الموظف</label>
                            <input type="text" name="name" required value="{{old('name')}}"
                                   class="form-control @error('name') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>اسم الشركه</label>
                            <input type="text" name="company_name" required value="{{old('company_name')}}"
                                   class="form-control @error('company_name') is-invalid @enderror">
                        </div>


                    </div>

                    <br>

                    <div class="row">


                        <div class="col">
                            <label>حاله الراء</label>
                            <select class="form-control p-1" name="status" required>
                                <option value="" disabled selected>-- Choose --</option>
                                <option
                                    value="1" {{old('status' , request()->input('status')) == "1" ? 'selected' : ''}}>
                                    مفعل
                                </option>
                                <option
                                    value="0" {{old('status' , request()->input('status')) == "0" ? 'selected' : ''}}>
                                    غير مفعل
                                </option>
                            </select>
                        </div>

                        <div class="col">
                            <label>التعليم</label>
                            <input type="text" name="learn"  class="form-control" value="{{old('learn')}}">
                        </div>
                    </div>


                    <br>



                    <br>

                    <div class="row">
                        <div class="col">
                            <h5 class="text-danger">صوره </h5>
                            <input type="file" name="cover" id="image_updload"  accept="image/*"
                                   class="file-input-overview">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">حفظ</button>
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
            });
        });
    </script>
@endsection


<!-- Modal -->

