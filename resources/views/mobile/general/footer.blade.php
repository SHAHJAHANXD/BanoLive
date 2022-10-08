
<!------------------------------Footer--------------------------------------->
<footer class="footer-back-img">
    <div class="container-fluid">
        <div class="row pt-5 pb-5">
            <div class="col-sm-12 col-md-3 col-xl-3">
                <div class="footer-image-box">
                    <img src="{{url('general/img/header-logo.svg')}}">
                    <p class="text-black">{{$Settings->about}}</p>
                </div>


            </div>
            <div class="col-sm-6 col-md-3 col-xl-3 navibar">
                <div class="ch-1 text-black ps-3 mb-3">Quick Links</div>
                <ul class=" ps-3">
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li><a href="{{url('/download')}}">Download</a></li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-6 col-xl-6 navibar text-center p-2">
                <div class="ch-1 text-black mb-3 mt-3">App Download</div>
                <div class="footer-image-box ">
                    <a href=""><img src="{{url('/general/img/app-button.svg')}}" alt=""></a>
                    <a href=""><img src="{{url('/general/img/play-button.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex bd-highlight">
            <div class="bd-highlight mt-3">
                <span class="bottom-desc text-dark">{!! $Settings->copyright !!}</span>
            </div>
            <div class="ms-auto bd-highlight">
                <ul>
                    <a href="{{url('/')}}" class="btn social-link-footer m-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{url('/')}}" class="btn social-link-footer m-1"><i class="fab fa-twitter"></i></a>
                    <a href="{{url('/')}}" class="btn social-link-footer m-1"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{url('/')}}" class="btn social-link-footer m-1"><i class="fab fa-instagram"></i></a>
                </ul>
            </div>
        </div>
    </div>

</footer>
<!----------------------------/Footer---------------------------------------->
