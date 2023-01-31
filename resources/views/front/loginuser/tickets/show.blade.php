@extends('front.user.master')

@section('title')
{{__('index.details_ticket')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">{{__('index.follow')}}</h4>
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

        <div class="col-md-12">
            <section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-content p-3">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="text-left">
                                    <h3>  {{$id->customer->name}}</h3>
                                    <p class="mb-0 text-muted">
                                        {{$id->message}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="text-left">
                                    <div>
                                        <i class="mdi mdi-briefcase-search-outline h2 text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- cd-timeline-content -->
                </div>

                @forelse($id->ticketReplys as $ticketReply)

                        <div class="" style="{{$ticketReply->user_id == true ? 'text-align: -webkit-left;padding: 10px;' : null}}">
                        <div class="cd-timeline-content p-3">

                            <div class="row">
                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-10">
                                    <div>
                                        <h3 class="text-left">{{$ticketReply->user->name ?? $ticketReply->customer->name}}</h3>
                                        <p class="mb-0 text-muted text-left">
                                            {{$ticketReply->message}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                @endforelse

            </section>

            @if($id->status == "accepted")

                <div class="container">
                    <form action="{{route('ticketsReply')}}" method="post">
                        @csrf
                        <input type="hidden" name="ticket_id" value="{{$id->id}}">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control p-4" name="message" required
                                           placeholder="{{__('index.sent_mes')}}" aria-label="{{__('index.sent_mes')}}"
                                           aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" id="button-addon2">{{__('index.sendMessage')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            @endif


        </div>

    </div>

@endsection

@section('js')
@endsection
