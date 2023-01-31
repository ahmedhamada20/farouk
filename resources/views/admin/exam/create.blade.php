@extends('admin.layouts.master')
@section('title')
اضافه جديده
@endsection
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto"> اضافه جديده</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                اضافه جديده</span>
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
                <form action="{{route('exam.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label>الاسم الامتحان بالغه العربيه</label>
                            <input type="text" name="name" required value="{{old('name')}}"
                                class="form-control @error('name') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاسم الامتحان بالغه الانجليزيه</label>
                            <input type="text" name="name_en" required value="{{old('name')}}"
                                class="form-control @error('name') is-invalid @enderror">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>الاجابه الصحيحه بالغه العربيه</label>
                            <input type="text" name="answer" required value="{{old('answer')}}"
                                class="form-control @error('answer') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاجابه الصحيحه بالغه الانجليزيه</label>
                            <input type="text" name="answer_en" required value="{{old('answer_en')}}"
                                class="form-control @error('answer') is-invalid @enderror">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>الاجابه الاولي بالغه العربيه</label>
                            <input type="text" name="answer_one" required value="{{old('answer_one')}}"
                                class="form-control @error('answer_one') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاجابه الاولي بالغه الانجليزيه</label>
                            <input type="text" name="answer_one_en" required value="{{old('answer_one_en')}}"
                                class="form-control @error('answer_one') is-invalid @enderror">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الاجابه الثانيه بالغه العربيه</label>
                            <input type="text" name="answer_two" required value="{{old('answer_two')}}"
                                class="form-control @error('answer_two') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاجابه الثانيه بالغه الانجليزيه</label>
                            <input type="text" name="answer_two_en" required value="{{old('answer_two_en')}}"
                                class="form-control @error('answer_two') is-invalid @enderror">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الاجابه الثالثه بالغه العربيه</label>
                            <input type="text" name="answer_there" value="{{old('answer_there')}}"
                                class="form-control @error('answer_there') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاجابه الثالثه بالغه الانجليزيه</label>
                            <input type="text" name="answer_there_en" value="{{old('answer_there_en')}}"
                                class="form-control @error('answer_there') is-invalid @enderror">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الاجابه الرابعه بالغه العربيه</label>
                            <input type="text" name="answer_four" value="{{old('answer_four')}}"
                                class="form-control @error('answer_four') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>الاجابه الرابعه بالغه الانجليزيه</label>
                            <input type="text" name="answer_four_en" value="{{old('answer_four_en')}}"
                                class="form-control @error('answer_four') is-invalid @enderror">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>وقت الامتحان</label>
                            <input type="number" required name="time" class="form-control" id="">
                        </div>

                        <div class="col">
                            <label>حاله الامتحان</label>
                            <select class="form-control" required name="status">
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                <option value="1">نشط</option>
                                <option value="0">غير نشط</option>
                            </select>
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
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

@endsection