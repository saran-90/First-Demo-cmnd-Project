   @include('admin.common.header')
   @include('admin.common.navbar')
   @include('admin.common.leftsidebar')
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('adminassets/js/crud/bootstrap.min.js') }}" ></script>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Category</h4>
                      <form class="forms-sample" method="POST" action="{{url('/category')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category name *</label>
                          <input type="text" name="category_name" value="" class="form-control" id="exampleInputEmail1" placeholder="category name" size="6">
                
                        </div>
                         @if ($errors->has('category_name'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('category_name') }}
                             </h4>
                          </div>  
                        @endif
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        <div style="margin-top: 5%;"  id="mydiv2">
                            @if(session('success1'))
                                <h4 class="card-title" style="color:#00ce68;">{{session('success1')}}</h4>
                            @endif
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title cat_title">Category table</h4>
                   
                  <div class="table-responsive">
                    <table class="table table-bordered" id="order-listing">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Category name
                          </th>
                          <th class="action">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($category as $categoryname)
                        <tr>
                          <td>
                            {{$categoryname->id}}
                          </td>
                          <td>
                             {{$categoryname->category_name}}
                          </td>
                          <td>
                              <div class="action">
                                <button class="btn btn-primary btn-sm fa_main"  data-category_name1="{{$categoryname->category_name}}"  data-catid="{{$categoryname->id}}" 
                                    data-toggle="modal" data-target="#edit">
                                    <span class="fas fa-pen"></span>
                                </button>

                                  <button class="btn btn-danger  del_button btn-sm fa_main" 
                                   data-toggle="tooltip" title="Delete" data-title="Delete">
                                     <a href='delete/cat/{{$categoryname->id}}'>
                                        <span class="fas fa-trash"></span>
                                    </a>
                                  </button>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                 
                </div>
              </div>
            </div>

            <!-- modal update category -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="card-title">Update Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('/categories')}}" method="post" id="newModalForm1">
                            {{method_field('patch')}}
                            {{csrf_field()}}
                        <div class="modal-body">
                                <input type="hidden" name="id" id="cat_id" value="">
                               <div class="form-group">
                                    <label for="title">Category name *</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" value="" required>
                                </div>
                              
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="btnSaveIt">Update</button>
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
<script> 
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var category_name = button.data('category_name1') 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #category_name').val(category_name);
     
      modal.find('.modal-body #cat_id').val(cat_id);
    })  
</script>
@include('admin.catjs')
@include('admin.common.footer')