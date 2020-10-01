@include('common.header')
       
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@include('ourjs')
       
        <section class="breadcrumb-area style2" "  style='background-image:url("{{ asset('themeassets/images/resources/breadcrumb-bg-2.jpg') }}")'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Our Projects</span>
                                <h1>We do best Interior Projects</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="active"><a href="{{url('/gallery')}}">Projects</a></li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

        <section class="main-project-area">
            <div class="container">
                <ul class="project-filter post-filter has-dynamic-filters-counter">
                   <!--  <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
                    <li data-filter=".mod"><span class="filter-text">Modern</span></li>
                    <li data-filter=".contem"><span class="filter-text">Contemporary</span></li>
                    <li data-filter=".trad"><span class="filter-text">Traditional</span></li>
                    <li data-filter=".ret"><span class="filter-text">Retreat</span></li> -->
                     <a href="{{url('/gallery')}}"><li data-filter=".filter-item" class=" {{ Request::is('gallery') ? 'active' : ''  }}"><span class="filter-text">All Projects</span></li></a>
                      @foreach(App\Category::all() as $cList)    
                                <li class="option"  value="{{$cList->category_name}}" 
                                    id="cat{{$cList->id}}" class="tran3s"> 
                                 <span class="filter-text"> {{$cList->category_name}}<span class="filter-text">
                               </li>
                               @endforeach
                </ul>
                <div class="row filter-layout masonary-layout"  id="GalleryData">
                     @foreach($gallery as $gal)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('gallery_images/' . $gal->image) }}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{$gal->id}}">sdfdsfds</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                     <!--    <span>Modern Design</span> -->
                                        <h3>{{$gal->gallery_name}}</h3>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="page_pagination" style="width: 100%;margin-left: 43%;">
                        {{$gallery->links()}}
                    </div>     

                </div>
            </div>
        </section>
        <script type="text/javascript">
             $('.project-filter li').click(function() {

    $('.project-filter li.active').removeClass('active');
    $(this).addClass('active');
});
        </script>
       <!-- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 @include('common.footer')