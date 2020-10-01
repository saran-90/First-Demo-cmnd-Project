@include('common.header')
    <style type="text/css">
        #notfound {
    position: relative;
    text-align: center;
    padding: 10%;
}
.notfound h2 {
    font-family: 'Montserrat', sans-serif;
    color: #000;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    margin-top: 0;
}
.notfound a {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
   background: #c32143;
    display: inline-block;
    padding: 15px 30px;
    border-radius: 40px;
    color: #fff;
    font-weight: 700;
    -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
    box-shadow: 0px 4px 15px -5px #0046d5;
}
.notfound p {
    font-family: 'Montserrat', sans-serif;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 20px;
    margin-top: 0px;
}
    </style>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
            </div>
            <h2>404 - Page not found</h2>
            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
            <a href="{{url('/')}}">Go To Homepage</a>
        </div>
    </div>
@include('common.footer')