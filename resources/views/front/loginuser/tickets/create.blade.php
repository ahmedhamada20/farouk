@extends('front.user.master')

@section('title')
{{__('index.new_ticket')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">{{__('index.new_ticket')}}</h4>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <form action="{{route('tickets.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>{{__('index.sender_name')}}</label>
                                <input type="text" value="{{auth()->user()->name}}" readonly class="form-control">
                            </div>

                            <div class="col">
                                <label>{{__('index.ticket_nu')}}</label>
                                <input type="text" name="ticketNumbers" readonly value="{{generateRandomString(7)}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>{{__('index.product')}}</label>
                                <select class="form-control p-1" name="category_id" required>
                                    <option value="" disabled selected>-- {{__('index.choose')}} --</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>{{__('index.mes')}}</label>
                                <textarea class="form-control" rows="5" name="message" required></textarea>
                            </div>
                        </div>

                        <br>

{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <label>المرفقات ان وجدت</label>--}}
{{--                                <p class="text-danger">يجب ان يكون الصوره من نوع jpg</p>--}}

{{--                                <input type="file" name="image" class="form-control" accept="image/*">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">{{__('index.add_ticket')}}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('js')
@endsection
