@if ($gallery->isEmpty()) 
<h2 style="color: red;margin: 4%;width: 100%;text-align: center;">No Project Found Under this Category</h2>
@endif
    @foreach($gallery as $gal)
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
        <div class="single-project-style4">
            <div class="img-holder">
                <div class="inner">
                    <img src="{{ asset('gallery_images/' . $gal->image) }}" alt="Sri Bannariyamman Assocaiates">
                    <div class="overlay-box">
                        <div class="box">
                            <div class="link">
                                <a href="{{$gal->id}}"></a>
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