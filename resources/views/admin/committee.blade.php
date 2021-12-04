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
                                            <h4 class="text-primary">Committee Members </h4>
                                        </div>
                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('committee')}}" class="text-success">Members</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddDepartment">
                                            <i class="feather icon-plus"></i>Add Member
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal code start -->
                        <div class="modal fade" id="AddUser" tabindex="-1" role="dialog"
                            aria-labelledby="AddUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AddUserLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('user-add-edit')}}" method="post">
                                    @csrf
                                     <input type="hidden" id="user_id" name="user_id" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="hr_name">Member Name</label>
                                                <input type="text" class="form-control" id="hr_name" aria-describedby="nameHelp" placeholder="Enter Member Name" name="name">
                                                <small id="nameHelp" class="form-text text-muted">Please enter Member Name</small>
                                            </div>
											<div class="form-group">
                                                <label for="hr_email">Member Email Id</label>
                                                <input type="email" class="form-control" id="hr_email" aria-describedby="nameHelp" placeholder="Enter Member Email ID" name="email">
                                                <small id="nameHelp" class="form-text text-muted">Please enter Member Email ID</small>
                                            </div>
											<div class="form-group">
                                                <label for="hr_mobile">Member Mobile No</label>
                                                <input type="number" class="form-control" id="hr_mobile" aria-describedby="nameHelp" placeholder="Enter Member Mobile No" name="mobile">
                                                <small id="nameHelp" class="form-text text-muted">Please enter Member Mobile No</small>
                                            </div>
											<input type="hidden" name="dep_id" value="{{Auth::user()->dep_id}}">
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
						<div class="card-block"> *** <span>Default password is "secret'DepId'". for Ex- "secret1"</span> </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Dep Id</th>
                                            <th>Name</th>
											<th>Email Id</th>
											<th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($users) && count($users))
                                        @foreach($users as $key=>$user)
                                        <tr>
                                            <th>{{$user->dep_id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
											<td>{{$user->mobile}}</td>
                                            <td><span class="btn btn-primary rounded editDep" data-user="{{$user}}">Edit Member</span></td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No data found</td>
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
        var user = $(this).data('user');
        $("#user_id").val(user.id);
        $("#hr_name").val(user.name);
		$("#hr_email").val(user.email);
		$("#hr_mobile").val(user.mobile);
        $("#AddUserLabel").text("Edit member");
        $('#AddUser').modal('toggle');
    });
    $(document).on("click", "#AddDepartment", function() {
        $("#user_id").val('');
		$("#hr_name").val('');
		$("#hr_email").val('');
		$("#hr_mobile").val('');
        $("#AddUserLabel").text("Add Member");
        $("#name").val('');
        $('#AddUser').modal('toggle');
    });
    </script>
</div>