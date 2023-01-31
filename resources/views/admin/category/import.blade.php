<div class="card-body">
    <form action="{{route('import-category')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <input type="file" name="filename" class="form-control" required>
            </div>

            <div class="col">
                <button class="btn btn-info btn-block" type="submit" id="button-addon2">رفع الملف</button>
            </div>
        </div>
    </form>
</div>
