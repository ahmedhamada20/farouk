<!-- Modal -->
<div class="modal fade" id="change{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تغير حاله العميل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customersChange')}}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{$row->id}}">

                    <div class="row">
                        <div class="col">
                            <label>تغير الحاله</label>
                            <select class="form-control" name="type">
                                <option value="waiting" {{$row->type == 'waiting' ? 'selected' : null}}>في انتظار الموافقه</option>
                                <option value="active" {{$row->type == 'active' ? 'selected' : null}}>مفعل</option>
                                <option value="block" {{$row->type == 'block' ? 'selected' : null}}>محظور</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">تغير الحاله</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
