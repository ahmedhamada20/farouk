<!-- Modal -->
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customers.update','test')}}" method="post">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$row->id}}">

                    <div class="row">
                        <div class="col">
                           <label>اسم المستخدم</label>
                            <input type="text" name="name" value="{{$row->name}}" class="form-control">
                        </div>

                        <div class="col">
                           <label>البريد الالكتروني</label>
                            <input type="email" name="email" value="{{$row->email}}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>رقم الهاتف</label>
                            <input type="number" name="phone" value="{{$row->phone}}" class="form-control">
                        </div>

                        <div class="col">
                            <label>العنوان</label>
                            <input type="text" name="address" value="{{$row->address}}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>كلمه المورو</label>
                            <input type="text" name="password"  class="form-control">
                        </div>
                    </div>

                    <br>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
