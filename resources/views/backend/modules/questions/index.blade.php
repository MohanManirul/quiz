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

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">
                                All question
                            </a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <div class="row">
              
                <div class="col-md-12">
                      @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <div class="card card-primary card-outline table-responsive">
                        <div class="card-header text-right">
                            <a  href="{{ route('question.create') }}"
                                class="btn btn-outline-dark">
                                Add
                            </a>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped dataTable dtr-inline question-datatable"
                                id="datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Option One</th>
                                        <th>Option Two</th>
                                        <th>Option Three</th>
                                        <th>Option Four</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_questions as $all_question)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $all_question->question }}</td>
                                        <td>{{ $all_question->option_one }}</td>
                                        <td>{{ $all_question->option_two }}</td>
                                        <td>{{ $all_question->option_three }}</td>
                                        <td>{{ $all_question->option_four }}</td>
                                        <td>                                            
                                            <a class="btn btn-success text-white" href="{{ route('question.edit', $all_question->id) }}">Edit</a>                                           
                                            <a class="btn btn-danger text-white" href="{{ route('question.delete', $all_question->id) }}">Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

</div>
@endsection

@section('per_page_js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('backend/js/custom-script.min.js') }}"></script>

<script src="{{ asset('backend/js/datatable/jquery.validate.js') }}"></script>
<script src="{{ asset('backend/js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{  asset('backend/js/ajax_form_submit.js') }}"></script>


<script>
    $(function () {
        $('.question-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('question.data') }}",
            order: [
                [0, 'Desc']
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'is_active',
                    name: 'is_active'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                },
            ]
        });
    });
</script>
@endsection