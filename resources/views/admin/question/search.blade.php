<div class="card-body">
    <form action="{{route('question.index')}}" method="get">
        @csrf

        <div class="row">
            <div class="col">
                <input type="text" name="keyword" class="form-control"
                       value="{{old('keyword',request()->input('keyword'))}}"
                       placeholder="اكتب كلمه البحث" aria-label="Recipient's username"
                       aria-describedby="button-addon2">
            </div>


            <div class="col">
                <select class="form-control p-1" name="status">
                    <option value="" disabled selected>-- Choose --</option>
                    <option
                        value="1" {{old('status' , request()->input('status')) == "1" ? 'selected' : ''}}>
                        Active
                    </option>
                    <option
                        value="0" {{old('status' , request()->input('status')) == "0" ? 'selected' : ''}}>
                        No Active
                    </option>
                </select>
            </div>

            <div class="col">
                <select class="form-control p-1" name="paginate">
                    <option value="" disabled selected>-- Choose --</option>
                    <option
                        value="2" {{old('paginate' , request()->input('paginate')) == 2 ? 'selected' : ''}}>
                        paginate 2
                    </option>
                    <option
                        value="10" {{old('paginate' , request()->input('paginate')) == 10 ? 'selected' : ''}}>
                        paginate 10
                    </option>
                    <option
                        value="20" {{old('paginate' , request()->input('paginate')) == 20 ? 'selected' : ''}}>
                        paginate 20
                    </option>
                    <option
                        value="30" {{old('paginate' , request()->input('paginate')) == 30 ? 'selected' : ''}}>
                        paginate 30
                    </option>
                </select>
            </div>

            <div class="col">
                <button class="btn btn-success btn-block" type="submit" id="button-addon2">
                    بحث
                </button>
            </div>
        </div>


    </form>
</div>
