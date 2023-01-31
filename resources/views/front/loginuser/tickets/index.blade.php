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
                        <h4 class="page-title m-0">{{__('index.ur_tickets')}}</h4>
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

                    <h4 class="mt-0 header-title mb-4"><a href="{{route('tickets.create')}}" class="btn btn-success">{{__('index.open_ticket')}}</a></h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('index.name')}}</th>
                            <th>{{__('index.ticket_nu')}}</th>
                            <th>{{__('index.cat')}}</th>
                            <th>{{__('index.staut')}}</th>
                            <th>{{__('index.Processes')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{auth()->user()->name}}</td>
                                <td>{{$row->ticketNumbers}}</td>
                                <td>{{$row->category->name}}</td>
                                <td>
                                    @if($row->status == 'padding')
                                        <span class="badge badge-warning p-2">{{__('index.wait')}}</span>
                                    @elseif($row->status == 'review')
                                        <span class="badge badge-info p-2">{{__('index.seen')}}</span>
                                    @elseif($row->status == 'accepted')
                                        <span class="badge badge-success p-2">{{__('index.answered')}}</span>
                                    @elseif($row->status == 'completed')
                                        <span class="badge badge-info p-2">{{__('index.done')}}</span>
                                    @else
                                        <span class="badge badge-danger p-2">{{__('index.canceled')}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('tickets.show',$row->ticketNumbers)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('js')
@endsection
