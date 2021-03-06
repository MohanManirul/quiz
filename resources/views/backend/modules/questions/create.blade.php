@extends("backend.template.layout")

@section('per_page_css')
<link href="{{ asset('backend/css/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<style>
    .sub_module_block ul {
        padding-left: 15px !important;
    }
    .sub_module_block ul p {
        margin-bottom: 5px !important;
    }
    .select2-container {
        z-index: 99999 !important;
    }
</style>
@endsection

@section('body-content')
<div class="content-wrapper" style="min-height: 147px;">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <form class="ajax-form" method="post" action="{{ route('question.add') }}">
                    @csrf
                    <div class="row">

                        <!-- name -->
                        <div class="col-md-12 col-12 form-group">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" name="question" >
                        </div>

                        <div class="col-md-12 col-12 form-group">
                            <label for="option_one">Option One</label>
                            <input type="text" class="form-control" id="A" name="option_one" >
                        </div>

                        <div class="col-md-12 col-12 form-group">
                            <label for="option_two">Option Two</label>
                            <input type="text" class="form-control" id="B" name="option_two" >
                        </div>

                        <div class="col-md-12 col-12 form-group">
                            <label for="option_three">Option Three</label>
                            <input type="text" class="form-control" id="C" name="option_three" >
                        </div>

                        <div class="col-md-12 col-12 form-group">
                            <label for="option_four">Option Four</label>
                            <input type="text" class="form-control" id="D" name="option_four" >
                        </div>

                        <div class="col-md-12 col-12 form-group">
                            <label>Answers</label>
                            <select class="form-control " name="answers">
                                
                                <option value="A" >A</option>
                                <option value="B" >B</option>
                                <option value="C" >C</option>
                                <option value="D" >D</option>
                                
                            </select>
                        </div>
            
                        <div class="col-md-12 form-group text-right">
                            <button type="submit" class="btn btn-outline-dark">
                                Add
                            </button>
                        </div>
            
                    </div>
                </form>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


</div>
@endsection

@section('per_page_js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('backend/js/custom-script.min.js') }}"></script>

<script src="{{ asset('backend/js/datatable/jquery.validate.js') }}"></script>
<script src="{{ asset('backend/js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{  asset('backend/js/ajax_form_submit.js') }}"></script>

@endsection