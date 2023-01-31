@extends('front.user.master')

@section('title')
{{__('index.my_products')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">{{__('index.my_products')}}</h4>
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

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('index.service_name')}}</th>
                            <th>{{__('index.packeg_name')}}</th>
                            <th>{{__('index.staut')}}</th>
                            <th>{{__('index.Processes')}}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$row->courses->name}}</td>
                                <td>{{$row->packages->name}}</td>
                                <td>{!!$row->status == 1 ? '<span class="badge badge-success">{{__('index.run')}}</span>' : '<span class="badge badge-primary">{{__('index.wait_run')}}</span>'!!}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" title="{{__('index.see')}}" data-toggle="modal"
                                            data-target="#exampleModal{{$row->id}}"><i class="fa fa-eye"></i></button>
                                </td>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('index.goods')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                @foreach($row->packages->featuresPackages as $package)
                                                    <p class="text-center">{{$package->name}}</p>
                                                    <hr>
                                                @endforeach
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                {{__('index.close')}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
