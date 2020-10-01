@include('admin.common.header')
@include('admin.common.navbar')
     @include('admin.common.leftsidebar')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="{{ asset('adminassets/js/crud/bootstrap.min.js') }}" ></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Project</h4>
                        <form class="forms-sample forms-1 col-md-12 col-lg-12 col-sm-12 col-xs-12" method="POST" files="true" 
                      enctype="multipart/form-data" action="{{url('/gallery')}}">
                        {{csrf_field()}}
                        <div class="col-md-6">

                        <div class="form-group">
                          <label for="exampleInputEmail1">Project name  *</label>
                          <input type="text" name="gallery_name" value="" class="form-control" id="exampleInputEmail1" placeholder="project name">
                        </div>

                         @if ($errors->has('gallery_name'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('gallery_name') }}
                             </h4>
                          </div>  
                        @endif
                        <div class="form-group">
                            <label>Select category *</label>
                           
                            <select class="form-control selectpicker" name="category" data-size="1">
                                <option value="">--Select--</option>
                                @foreach(App\Category::all() as $cList)    
                                    <option  value="{{$cList->category_name}}"> {{$cList->category_name}} </option>
                               @endforeach
                            </select> 
                        </div> 
                        @if ($errors->has('category'))
                          <div>
                             <h4 class="card-title" id="mydiv2" style="color: red;">{{ $errors->first('category') }}
                             </h4>
                          </div>  
                        @endif
                        
                        <div class="form-group">
                             <label for="exampleInputEmail1">Add  image *</label>
                             <div class="image-upload-wrap">
                                <input class="file-upload-input" name="image" type='file' onchange="readURL(this);" accept="image/*" />
                                <div class="drag-text">
                                  <h3>Drag and drop a  Image</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                  <button type="button" onclick="removeUpload()" class="btn btn-danger">Remove <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>   
                        @if ($errors->has('image'))
                          <div>
                             <h4 class="card-title mydiv3" style="color: red;">{{ $errors->first('image') }}
                             </h4>
                          </div>  
                        @endif


                        <input type="submit" name="submit"  class="btn btn-success mr-2">                                     
                        <button class="btn btn-light">Cancel</button>
                        <div style="margin-top: 5%;"  id="mydiv2">
                            @if(session('success1'))
                                <h4 class="card-title" style="color:#00ce68;">{{session('success1')}}</h4>
                            @endif
                        </div>
                      </div>

                         
                         <div class="col-md-6">
             
                          

                            <div class="form-group">
                              <label for="location">Location*</label>
                              <input type="text" name="location" value="" class="form-control" id="location1" placeholder="Location">
                            </div>

                         @if ($errors->has('location'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('location') }}
                             </h4>
                          </div>  
                        @endif

                          <div class="form-group">
                              <label for="exampleInputEmail1">Flat Type* </label>
                              <select class="form-control selectpicker select2 js-example-basic-single" name="flat_tpye" id="" data-show-subtext="true" data-live-search="true"  required=""  data-size="1"  style="padding: 1.2rem 1.75rem; height: 20px;"
                              >
                                <option value="" >-- Select --</option>
                                <option value="2BHK">2BHK</option>
                                <option value="3BHK">3BHK</option>
                                <option value="4BHK">4BHK</option>
                                <option value="5BHK">5BHK</option>
                                <option value="6BHK">6BHK</option>
                                <option value="7BHK">7BHK</option>
                              </select> 

                            </div>

                        
                  

                        <div class="form-group">
                          <label for="square_feet">Square Feet*</label>
                          <input type="number" name="square_feet" value="" class="form-control" id="square_feet" placeholder="Square feet">
                        </div>

                         @if ($errors->has('square_feet'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('square_feet') }}
                             </h4>
                          </div>  
                        @endif

                         
                          <div class="form-group">
                          <label for="description">Descrtiption *</label>
                           <textarea name="description" class="form-control" placeholder="Project description"></textarea>
                        </div>

                         @if ($errors->has('description'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('description') }}
                             </h4>
                          </div>  
                        @endif

                         <div class="form-group">
                          <label for="description">Descrtiption *</label>
                          <input type="file" name="photos[]" multiple class="form-control">
</div>




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
                    <h4 class="card-title cat_title">Project table</h4>
                    
                  <div class="table-responsive">
                    <table class="table table-bordered" id="order-listing">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Project name
                          </th>
                           <th>
                            Category name
                          </th>
                           <th class="action">
                              Image
                          </th>
                          <th class="action">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($gallery as $gal)
                      <tr>
                            <td>
                               {{$gal->id}}
                            </td>
                            <td>
                                {{$gal->gallery_name}}
                            </td>
                            <td>
                                {{$gal->category}}
                            </td>
                            <td class="action">
                                <img src="{{ asset('gallery_images/' . $gal->image) }}" 
                                style="width: 80px;height: 80px;" /> 
                            </td>
                            <td>
                              <div class="action">
                                <button class="btn btn-primary btn-sm fa_main ddd"  data-gallery_name="{{$gal->gallery_name}}"
                                   data-image=
                                   "{{asset('gallery_images/' . $gal->image) }}"
                                    data-gal_id="{{$gal->id}}"  
                                     data-category="{{$gal->category}}" 
                                    data-toggle="modal" data-target="#edit_gal1">
                                    <span class="fas fa-pen"></span>
                                </button>

                                  <button class="btn btn-danger del_button btn-sm fa_main" 
                                   data-toggle="tooltip" title="Delete" data-title="Delete">
                                     <a href='delete/gal/{{$gal->id}}'>
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

    
            <!-- modal update gallery -->
            <div class="modal fade" id="edit_gal1" tabindex="-1"
             role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="card-title">Update Your Projects</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{route('/galleries')}}" method="post" id="newModalForm1"  files="true" 
                      enctype="multipart/form-data">
                            {{method_field('patch')}}
                            {{csrf_field()}}
                        <div class="modal-body">
                                <input type="hidden" name="id" id="gal_id" value="">
                                <div class="form-group">
                                    <label for="title">Project name *</label>
                                    <input type="text" class="form-control" name="gallery_name" id="gallery_name" value="" required>
                                </div>
                                <div class="form-group">
                                        <label>Select category *</label>
                                        <select class="form-control selectpicker" 
                                         id="category" name="category" data-size="1">
                                    
                                            <option value="" id="category" name="category">
                                            </option>
                                            @foreach(App\Category::all() as $cList)    
                                                <option  value="{{$cList->category_name}}"> {{$cList->category_name}} </option>
                                             @endforeach
                                          
                                     </select>
                                </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Change Project  image *</label>
                                     <div class="img_main" >
                                        <img src=""  id="image"  class="modal_img_show" 
                                            name="image"  /> 
                                </div>
                                    <div class="upload-wrap2" id="image-upload-wrap1">
                                        <input  name="image" id="file-upload-input1"
                                         type='file' onchange="readURL1(this);" 
                                         accept="image/*" />
                                            <div class="drag-text drag_gall">
                                               <h3>Change a image</h3>
                                            </div>
                                    </div>
                                    <div  id="file-upload-content1">
                                        <img  id="file-upload-image1" name="image" alt="your image" />
                                        <div  id="image-title-wrap1">
                                          <button type="button" onclick="removeUpload1()"
                                           class="btn btn-danger">Remove <span   id="image-title1">Uploaded Image</span></button>
                                        </div>
                                    </div>          
                                </div>                                           
                        </div>
                        <div class="modal-footer">
                            <input type="submit"  name="submit" class="btn btn-success" id="btnSaveIt"  value="Update Gallery">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                </div>
                @include('admin.modalgalleryjs')
            </div>

<script> 

    $('#edit_gal1').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var gallery_name = button.data('gallery_name')
        var category = button.data('category')  
       // var image = button.data('image')
        var gal_id = button.data('gal_id')
         
        var image = button.data('image');
         


        var modal = $(this)
        modal.find('.modal-body #gallery_name').val(gallery_name);
        modal.find('.modal-body #category').val(category);
        // modal.find('.modal-body #category').append(category);

        modal.find('.modal-body #image').attr('src',image);
        modal.find('.modal-body #gal_id').val(gal_id);

    });  


</script>


 @include('admin.galleryjs')
 
 @include('admin.common.footer')