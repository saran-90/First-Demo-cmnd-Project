@include('admin.common.header')
@include('admin.common.navbar')
     @include('admin.common.leftsidebar')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="{{ asset('adminassets/js/crud/bootstrap.min.js') }}" ></script>

    <style type="text/css">
        .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -28px;
        padding-right: 25px;
        position: relative;
        z-index: 2;
        }
    </style>   
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Company Profile</h4>
                      
                         
                          <form class="forms-sample" method="POST" files="true" 
                      enctype="multipart/form-data" action="{{action('ProfileController@update', [$profile->id])}}">
                        {{csrf_field()}}

                        <div class="form-group">
                          <label for="exampleInputEmail1">Profile name  *</label>
                          <input type="text" name="profile_name" value="{{$profile->profile_name}}" class="form-control" id="exampleInputEmail1" placeholder="profile name">
                        </div>

        
                        
                        <div class="form-group">
                                     <label for="exampleInputEmail1">Profile  Photo *</label>
                                     <div class="img_main" >
                                        <img src="{{ asset('adminassets/images/' . $profile->image) }}"  id="image"  class="modal_img_show" 
                                            name="image"  /> 
                                </div>
                                    <div class="upload-wrap2" id="image-upload-wrap1">
                                        <input  name="image" id="file-upload-input1"
                                         type='file' onchange="readURL1(this);" 
                                         accept="image/*" />
                                            <div class="drag-text drag_gall">
                                               <h3>Change a Photo</h3>
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
                      
                         <button type="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              </div>
   

<script type="text/javascript">
    function readURL1(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('#image-upload-wrap1').hide();

      $('#file-upload-image1').attr('src', e.target.result);
      $('#file-upload-content1').show();

      $('#image-title1').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('#file-upload-input1').replaceWith($('#file-upload-input1').clone());
  $('#file-upload-content1').hide();
  $('#image-upload-wrap1').show();
}
$('#image-upload-wrap1').bind('dragover', function () {
        $('#image-upload-wrap1').addClass('image-dropping');
    });
    $('#image-upload-wrap1').bind('dragleave', function () {
        $('#image-upload-wrap1').removeClass('image-dropping');
});


    function myFunction1() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
         
 @include('admin.common.footer')