@extends('admin.layouts.master')
@section('title')
اضافه حصه جديده
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ حصص اون لاين</span>
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
            <form action="{{ route('zoom.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col">
                        <label>عنوان الحصه</label>
                        <input type="text" name="topic" class="form-control" required>
                    </div>


                    <div class="col">
                        <label>تاريخ الحصه </label>
                        <input type="datetime-local" name="start_at" class="form-control" required>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label> مده الحصه بالدقائق </label>
                        <input type="number" name="duration" class="form-control">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary">انشاء حصه جديده</button>
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
