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
                                            <h4 class="text-primary">Departments</h4>
                                        </div>
                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('departmets')}}" class="text-success">Departments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddDepartment">
                                            <i class="feather icon-plus"></i>Add Department
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
                                        <h5 class="modal-title" id="AddBoxesLabel">Add Department</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('department-add-edit')}}" method="post">
                                    @csrf
                                     <input type="hidden" id="dep_id" name="dep_id" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="type">Department</label>
                                                <input type="text" class="form-control" id="dep" aria-describedby="nameHelp" placeholder="Enter Department Name" name="name">
                                                <small id="nameHelp" class="form-text text-muted">Please enter Department Name</small>
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
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($departments) && count($departments))
                                        @foreach($departments as $key=>$department)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$department->name}}</td>
                                            <td>{{$department->status}}</td>
                                            <td><span class="btn btn-primary rounded editDep" data-dep="{{$department}}">Edit Department</span></td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">No data found</td>
                                            </tr>
                                        @endif
                                    </tbody>
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
      $(document).on("click", ".editDep", function() {
        var dep = $(this).data('dep');
        $("#dep_id").val(dep.id);
        $("#dep").val(dep.name);
        $("#AddBoxesLabel").text("Edit Department");
        $('#AddBoxes').modal('toggle');
    });
    $(document).on("click", "#AddDepartment", function() {
        $("#dep_id").val('');
        $("#AddBoxesLabel").text("Add Department");
        $("#name").val('');
        $('#AddBoxes').modal('toggle');
    });
    </script>
</div>