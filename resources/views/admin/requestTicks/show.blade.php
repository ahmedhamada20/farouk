@extends('admin.layouts.master')
@section('title')
تفاصيل التذكره
@endsection

@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">تفاصيل التذكره</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header custom-card-header">
                    <h6 class="card-title mb-0">تفاصيل التذكره</h6>
                </div>
                <div class="card-body">
                    <div class="vtimeline">
                        <div class="timeline-wrapper timeline-wrapper-primary">
                            <div class="timeline-badge success"><img class="timeline-image" alt="img" src="{{URL::asset('admin/assets/img/faces/3.jpg')}}"> </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title">{{$data->customer->name}}</h6>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                    {{$data->message}}
                                    </p>
                                </div>
                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                    <span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>{{$data->created_at->diffForHumans(['parts'=>1,'join'=>', '])}}</span>
                                </div>
                            </div>
                        </div>
                        @foreach($data->ticketReplys as $ticketReply)
                        <div class="timeline-wrapper timeline-wrapper-success {{$ticketReply->user_id == true ? 'timeline-inverted' : null}}">
                            <div class="timeline-badge"><i class="las la-business-time"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h6 class="timeline-title">{{$ticketReply->user_id == true ? $ticketReply->user->name : $ticketReply->customer->name}}</h6>
                                </div>
                                <div class="timeline-body">
                                    <p>{{$ticketReply->message}}</p>
                                </div>
                                <div class="timeline-footer d-flex align-items-center flex-wrap">
                                    <span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>{{$ticketReply->created_at->diffForHumans(['parts'=>1,'join'=>', '])}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>

                <div class="container">
                    <form action="{{route('requestTicks.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="customer_id" value="{{$data->customer_id}}">
                        <input type="hidden" name="ticket_id" value="{{$data->id}}">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control p-4" name="message" required placeholder="ارسل رسالتك" aria-label="ارسل رسالتك" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success"  id="button-addon2">ارسال</button>
                                    </div>
                                </div>
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
