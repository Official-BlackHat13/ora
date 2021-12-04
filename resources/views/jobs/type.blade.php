<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header" style="background-color: #404e67; border-bottom: none;padding: 10px !important;">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="page-header-title">
                                        <div class="d-inline">
                                            <h4 class="text-primary">Job Types</h4>
                                        </div>

                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!" class="text-default">Job Posting</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('job-types')}}" class="text-success">Job Types</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddType">
                                            <i class="feather icon-plus"></i>Add Job Type
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal code start -->
                        <div class="modal fade" id="AddBoxes" tabindex="-1" role="dialog"
                            aria-labelledby="AddBoxesLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddBoxesLabel">Add Job Type</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('type-add-edit')}}" method="post">
                                    @csrf
                                     <input type="hidden" id="type_id" name="type_id" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="type">Job Type</label>
                                                <input type="text" class="form-control" id="type" aria-describedby="nameHelp" placeholder="Enter Job Type" name="type">
                                                <small id="nameHelp" class="form-text text-muted">Please enter job type for identify</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save/Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal code end -->
                        <!-- used this area for search -->

                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Job Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($types) && count($types))
                                        @foreach($types as $key=>$type)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$type->type}}</td>
                                            <td>{{$type->status}}</td>
                                            <td><span class="btn btn-primary rounded editType" data-type="{{$type}}">Edit Job Type</span></td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">No data found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Job Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).on("click", ".editType", function() {
        var type = $(this).data('type');
        $("#type_id").val(type.id);
        $("#type").val(type.type);
        $("#AddBoxesLabel").text("Edit Job Type");
        $('#AddBoxes').modal('toggle');
    });
    $(document).on("click", "#AddType", function() {
        $("#type_id").val('');
        $("#AddBoxesLabel").text("Add Job Type");
        $("#type").val('');
        $('#AddBoxes').modal('toggle');
    });
    </script>
</div>