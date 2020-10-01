<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});

</script>



<script type="text/javascript">

    $(document).ready(function(){
        fetch_customer_data();
          function fetch_customer_data(query = '')
          {
            $.ajax({
                url:"{{ route('gallery.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                { 
                  $('tbody').html(data.table_data);
                //$('#total_records').text(data.total_data);
                }
            })
         }
        $(document).on('keyup', '#search1', function(){
          var query = $(this).val();
          fetch_customer_data(query);
        });
   });
</script>
