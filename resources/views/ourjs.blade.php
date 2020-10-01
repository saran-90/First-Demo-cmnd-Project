<script>
$(document).ready(function(){
  @foreach(App\Category::all() as $cList)
  $("#cat{{$cList->id}}").click(function(){
    var cat = $("#cat{{$cList->id}}").val();
 //   alert(cat);
//  var price = $('#priceID').val();
    $.ajax({
      type: 'get',
      dataType: 'html',
      data:  'category_name=' + '{{$cList->category_name}}',
      url: '{{url('/gallerysearch')}}',
      success:function(response){
        console.log(response);
        $("#GalleryData").html(response);
      }
    });


  });
@endforeach
});
</script>
