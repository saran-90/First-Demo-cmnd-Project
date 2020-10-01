@include('admin.common.header')
@include('admin.common.navbar')
     @include('admin.common.leftsidebar')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="{{ asset('adminassets/js/crud/bootstrap.min.js') }}" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add News</h4>
                        <form class="forms-sample" method="POST" files="true" 
                      enctype="multipart/form-data" action="{{url('/newsletter')}}">
                        {{csrf_field()}}

                        <div class="form-group">
                          <label for="exampleInputEmail1">Title  *</label>
                          <input type="text" name="title" value="" class="form-control" id="exampleInputEmail1" placeholder="Title Here">
                        </div>

                         @if ($errors->has('title'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('title') }}
                             </h4>
                          </div>  
                        @endif
                        <div class="form-group">
                            <label>Date *</label>
                            <div id="datepicker" class="input-group date date_event" data-date-format="mm-dd-yyyy">
                           <input class="form-control" name="date"
                            type="text" placeholder="" readonly  />
                            <span class="input-group-addon"><i class="">
                              
                            </i></span>
                           </div>
                        </div> 
                        @if ($errors->has('date'))
                          <div>
                             <h4 class="card-title" id="mydiv2" style="color: red;">{{ $errors->first('date') }}
                             </h4>
                          </div>  
                        @endif
                         <div class="form-group">
                          <label for="exampleInputEmail1">Description *</label>
                          <textarea name="description" class="form-control" 
                          placeholder="Description Here"></textarea>
                        </div>

                         @if ($errors->has('description'))
                          <div>
                             <h4 class="card-title" id="mydiv1" style="color: red;">{{ $errors->first('description') }}
                             </h4>
                          </div>  
                        @endif
                        
                        <div class="form-group">
                             <label for="exampleInputEmail1">Add   photo *</label>
                             <div class="image-upload-wrapnews">
                                <input class="file-upload-inputnews" name="photo" type='file' onchange="readURL(this);" accept="image/*" />
                                <div class="drag-text">
                                  <h3>Drag and drop a  Photo</h3>
                                </div>
                            </div>
                            <div class="file-upload-contentnews">
                                <img class="file-upload-imagenews" src="#" alt="your image" />
                                <div class="image-title-wrapnews">
                                  <button type="button" onclick="removeUpload()" class="btn btn-danger">Remove <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>   
                        @if ($errors->has('photo'))
                          <div>
                             <h4 class="card-title mydiv3" style="color: red;">{{ $errors->first('photo') }}
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
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title cat_title">News  table</h4>
                    
                  <div class="table-responsive">
                    <table class="table table-bordered " id="order-listing">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Title
                          </th>
                            <th>
                           Date
                          </th>
                           <th>
                            Description
                          </th>
                           <th class="action">
                             Photo
                          </th>
                          <th class="action">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($newsletter as $news)
                      <tr>
                            <td>
                               {{$news->id}}
                            </td>
                            <td>
                                {{$news->title}}
                            </td>
                            <td>
                                {{$news->date}}
                            </td>
                             <td  class="newsletter_p">
                                {{$news->description}}
                            </td>
                            <td class="action">
                                <img src="{{ asset('newsletter_images/' . $news->photo) }}" 
                                style="width: 80px;height: 80px;" /> 
                            </td>
                            <td>
                              <div class="action">
                                <button class="btn btn-primary btn-sm fa_main ddd"  data-title="{{$news->title}}"
                                   data-photo=
                                   "{{asset('newsletter_images/' . $news->photo) }}"
                                    data-news_id="{{$news->id}}"  
                                     data-date="{{$news->date}}"  
                                     data-description="{{$news->description}}"
                                    data-toggle="modal" data-target="#edit_news1">
                                    <span class="fas fa-pen"></span>
                                </button>

                                  <button class="btn btn-danger del_button btn-sm fa_main" 
                                   data-toggle="tooltip" title="Delete" data-title="Delete">
                                     <a href='delete/news/{{$news->id}}'>
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
            <div class="modal fade" id="edit_news1" tabindex="-1"
             role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="card-title">Update Your News</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{route('/newsletter')}}" method="post" 
                    id="newModalForm1"  files="true" 
                      enctype="multipart/form-data">
                            {{method_field('patch')}}
                            {{csrf_field()}}
                        <div class="modal-body">
                                <input type="hidden" name="id" id="news_id" value="">
                                <div class="form-group">
                                    <label for="title">Title *</label>
                                    <input type="text" class="form-control"
                                     name="title" id="title" value="" required>
                                </div>
                                <div class="form-group">
                                        <label>Date *</label>
                                        <div id="datepicker1" class="input-group date date_event" data-date-format="mm-dd-yyyy">
                                           <input class="form-control" id="date" name="date"
                                            type="text" placeholder="" readonly  />
                                           <span class="input-group-addon"><i class="">
                              
                                       </i></span>
                                       </div>
                                </div>
                                 <div class="form-group">
                          <label for="exampleInputEmail1">Description *</label>
                          <textarea name="description" id="description" class="form-control" 
                          placeholder="Description Here"></textarea>
                        </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Change News  Photo *</label>
                                     <div class="img_main" >
                                        <img src=""  id="photo"  class="modal_img_show" 
                                            name="photo"  /> 
                                </div>
                                    <div class="upload-wrap2" id="image-upload-wrap2">
                                        <input  name="photo" id="file-upload-input2"
                                         type='file' onchange="readURL1(this);" 
                                         accept="image/*" />
                                            <div class="drag-text drag_gall">
                                               <h3>Change a image</h3>
                                            </div>
                                    </div>
                                    <div  id="file-upload-content2">
                                        <img  id="file-upload-image2" name="photo" alt="your image" />
                                        <div  id="image-title-wrap2">
                                          <button type="button" onclick="removeUpload1()"
                                           class="btn btn-danger">Remove <span   id="image-title1">Uploaded Image</span></button>
                                        </div>
                                    </div>          
                                </div>                                           
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-success" id="btnSaveIt"  value="Update Gallery">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                </div>
                @include('admin.modalnewsletterjs')
            </div>

<script> 

    $('#edit_news1').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var title = button.data('title')
        var date = button.data('date')  
         var description = button.data('description')  
       // var image = button.data('image')
        var news_id = button.data('news_id')
         
        var photo = button.data('photo');
         


        var modal = $(this)
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #date').val(date);
         modal.find('.modal-body #description').val(description);
        // modal.find('.modal-body #category').append(category);

        modal.find('.modal-body #photo').attr('src',photo);
        modal.find('.modal-body #news_id').val(news_id);

    });  


</script>

<script type="text/javascript">
  $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

 $(function () {
  $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
</script>
 @include('admin.newsletterjs')
 
 @include('admin.common.footer')