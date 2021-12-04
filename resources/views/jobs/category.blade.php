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
                                            <h4 class="text-primary">Job Categories</h4>
                                        </div>

                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!" class="text-default">Job Posting</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('job-categories')}}" class="text-success">Job Categories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddCategory">
                                            <i class="feather icon-plus"></i>Add Category
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
                                        <h5 class="modal-title" id="AddBoxesLabel">Add Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('category-add-edit')}}" method="post">
                                    @csrf
                                     <input type="hidden" id="category_id" name="cat_id" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" id="category" aria-describedby="nameHelp" placeholder="Enter Category" name="category">
                                                <small id="nameHelp" class="form-text text-muted">Please enter category name for identify</small>
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
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($categories) && count($categories))
                                        @foreach($categories as $key=>$category)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$category->category}}</td>
                                            <td>{{$category->status}}</td>
                                            <td><span class="btn btn-primary rounded editCategory" data-category="{{$category}}">Edit Category</span></td>
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
      $(document).on("click", ".editCategory", function() {
        var category = $(this).data('category');
        $("#category_id").val(category.id);
        $("#category").val(category.category);
        $("#AddBoxesLabel").text("Edit Category");
        $('#AddBoxes').modal('toggle');
    });
    $(document).on("click", "#AddCategory", function() {
        $("#category_id").val('');
        $("#AddBoxesLabel").text("Add Category");
        $("#category").val('');
        $('#AddBoxes').modal('toggle');
    });
    </script>
</div>