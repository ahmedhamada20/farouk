<!-- Modal -->
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">      تعديل الميزه ::   <strong class="text-danger">{{$row->name}}</strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('featuresPackages.update','test')}}" method="post" autocomplete="off"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" name="package_id" value="{{$row->package_id}}">

                    <div class="row">
                        <div class="col">
                            <label>الاسم بالغه العربيه</label>
                            <input type="text" name="name" value="{{$row->getTranslation('name','ar')}}"
                                   class="form-control @error('name') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاسم بالغه الانجليزيه</label>
                            <input type="text" name="name_en" value="{{$row->getTranslation('name','en')}}"
                                   class="form-control @error('name') is-invalid @enderror">
                        </div>
                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
