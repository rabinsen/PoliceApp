@extends('layouts.master')

@section('page_name','Projects')

@section('links')
    <link href="{{ asset('admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"/>
    <!--WaitMe Css-->
    <link href="{{ asset('admin/plugins/waitme/waitMe.css') }}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"
          rel="stylesheet"/>
    <!-- JQuery DataTable Css -->
    <link href="{{asset('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.min.css') }}"
          rel="stylesheet"/>

    <link href="{{asset('admin/css/style.min.css') }}" rel="stylesheet"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('admin/css/themes/all-themes.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/plugins/waitme/waitMe.css" rel="stylesheet') }}"/>
    <link href="{{asset('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"
          rel="stylesheet"/>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    <ol class="breadcrumb breadcrumb-col-teal">
                        <li><a href="{{ url("/") }}"><i class="material-icons">home</i> Home</a></li>
                        <li class="active"><i class="material-icons">library_books</i>Criminal Record</li>
                    </ol>
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <span>CRIMINAL INFORMATION</span>

                                <a href="{{ route('criminals.create') }}"
                                   class="btn bg-green btn-lg pull-right waves-effect">Enter New Criminal Details</a>

                            </h2>
                        </div>
                        <div class="body">
                            @if($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    {{ $message }}
                                </div>

                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Crime</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                {{--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">--}}
                                {{--<button class="btn btn-primary waves-effect" id="deleteproject" data-type="confirm">CLICK ME</button>--}}
                                {{--</div>--}}
                                {{--{!! $projects->render() !!}--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('.js-basic-example').DataTable({
                responsive: true
            });

            //Exportable table
            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
//                    'copy', 'csv', ,'excel' 'pdf', 'print'
                    'excel', 'print'
                ]
            });
        });
    </script>
    <script src="{{ asset('/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <script src="{{ asset('/js/project/view.js') }}"></script>

    <!-- Wait Me Plugin Js -->
    <script src="{{ asset('/admin/plugins/waitme/waitMe.js') }}"></script>

    <script src="{{ asset('/admin/js/pages/cards/colored.js') }}"></script>

    <script src="{{ asset('/admin/plugins/autosize/autosize.js') }}"></script>
    <!-- -->
    <script src="{{ asset('/admin/plugins/momentjs/moment.js') }}"></script>

    <script src="{{ asset('/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <script src="{{ asset('/js/createproject.js') }}"></script>

    <script src="{{ asset('/admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/admin/js/admin.js')}}"></script>
    <script src="{{ asset('/admin/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{ asset('/admin/js/demo.js')}}"></script>
    <script src="{{ asset('/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <script src="{{ asset('/js/createproject.js') }}"></script>

@endsection
