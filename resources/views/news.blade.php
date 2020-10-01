@include('common.header')
       

       
        <section class="breadcrumb-area style2" "  style='background-image:url("{{ asset('themeassets/images/resources/breadcrumb-bg-2.jpg') }}")'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Latest News</span>
                                <h1>We Do Latest Interior Design</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/news')}}">News</a></li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

        <section id="blog-area" class="blog-default-area">
            <div class="container">
                <div class="row">
  @foreach($news as $news)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                         
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="{{ asset('newsletter_images/' . $news->photo) }}" alt="Sri Bannariyamman Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>{{$news->date}} <!-- <br><span>02</span> --></h3>
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="#">{{$news->title}}</a></h3>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>By <a href="#">Admin</a></li>
                                            <li>In <a href="#">SBA Interior</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p>{{$news->description}}</p>
                                       <!--  <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a> -->
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>

               @endforeach   

                </div>
            </div>
        </section>
@include('common.footer')