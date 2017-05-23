@extends('layouts.master')

@section('page_name','Projects')

@section('links')
    <link href="{{ asset('admin/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet"/>



    <!-- Custom Css -->
    <link href="{{ asset('admin/plugins/waitme/waitMe.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/plugins/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('admin/css/style.min.css') }}" rel="stylesheet"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('admin/css/themes/all-themes.css') }}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"
          rel="stylesheet"/>
    <link href="{{asset('admin/css/themes/all-themes.min.css') }}" rel="stylesheet"/>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ENTER CRIMINAL DETAILS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            {!! Form::open(array('route' => 'criminals.store','method'=>'POST', 'id' => 'wizard_with_validation')) !!}
                            {{--<form id="wizard_with_validation" method="POST">--}}
                            <h3>Criminal Information</h3>
                            <fieldset>
                                <div class="col-lg-12">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="f_name" class="form-control" required>
                                                <label class="form-label">First Name*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_name" class="form-control">
                                                <label class="form-label">Middle Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="l_name" class="form-control" required>
                                                <label class="form-label">Last Name*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="father_name" class="form-control">
                                                <label class="form-label">Father Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="grandfather_name" class="form-control">
                                                <label class="form-label">Grandfather Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="c_number" class="form-control" required>
                                                <label class="form-label">Citizenship Number</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="l_number" class="form-control" required>
                                                <label class="form-label">License Number</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="dob"
                                                       placeholder="Date of Birth">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Weapon Info</h3>
                            <fieldset>
                                <div class="col-lg-12">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="w_name" class="form-control" required>
                                                <label class="form-label">Weapon Name*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="w_type" class="form-control" required>
                                                <label class="form-label">Weapon Type*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" name="w_description" class="form-control no-resize"
                                                          placeholder="Weapon Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Material Info</h3>
                            <fieldset>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                                <textarea rows="4" name="m_description" class="form-control no-resize"
                                                          placeholder=" Material Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Medical Records</h3>
                            <fieldset>
                                <div class="col-lg-12">
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_type" class="form-control" required>
                                                <label class="form-label">Medical Type*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_name" class="form-control" required>
                                                <label class="form-label">Medical Name*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" name="md_description" class="form-control no-resize"
                                                          placeholder=" Medical Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_doctor" class="form-control">
                                                <label class="form-label">Medical Doctor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_hospital" class="form-control">
                                                <label class="form-label">Medical Hospital</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="m_status" class="form-control">
                                                <label class="form-label">Medical Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Police</h3>
                            <fieldset>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="p_unit" class="form-control">
                                            <label class="form-label">Police Unit</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="p_incharge" class="form-control">
                                            <label class="form-label">Police Incharge</label>
                                        </div>
                                    </div>

                            </fieldset>
                            {!! Form::close() !!}
                            {{--</form>--}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('/admin/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('/admin/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/admin/js/admin.js') }}"></script>
    <script src="{{ asset('/admin/js/pages/forms/form-wizard.js') }}"></script>

    <script src="{{ asset('/admin/plugins/autosize/autosize.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('/admin/js/demo.js') }}"></script>

    <script src="{{ asset('/js/createproject.js') }}"></script>

    <!-- RangeSlider Plugin Js -->
    <script src="{{ asset('/admin/plugins/ion-rangeslider/js/ion.rangeSlider.js') }}"></script>
    <!-- -->
    <script src="{{ asset('/admin/plugins/autosize/autosize.js') }}"></script>
    <!-- -->
    <script src="{{ asset('/admin/plugins/momentjs/moment.js') }}"></script>
    <!-- -->
    <script src="{{ asset('/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('/admin/plugins/dropzone/dropzone.js') }}"></script>




@endsection
