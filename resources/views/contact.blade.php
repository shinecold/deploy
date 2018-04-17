@extends ( 'user.app')

@section( 'bg-img', asset( 'user/img/church_about.jpg'))

@section ( 'head' )
@section('head')
    <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection
@section( 'title', 'ဆက္သြယ္ရန္')
@section ( 'main-content' )

    <div id="fb-root"></div>
    <!--script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script-->


    <!-- Post Content -->

        <div class="container" >
                    <div class="col-md-12"  align="center">

                        <div class="thumbnail">
                            <h3 style="text-align:center"> Church Address</h3>

                            <div class="caption"  style="width:100%;">
                                <h1>ေက်းဇူးေတာ္ အသင္းေတာ္</h1>
                                <h2>Grace Church In Chiang Mai</h2>
                                <h4>No. 105/20, Moo.3, Soi Doa Ngearn, Chiang Mai - San kanphang Rd, <br>
                                    T.Nong Pa krang, A. Muang, Chiang Mai. 50000. P.O. Box 374.</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> Pastor</h3>
                                <img src="{{asset('user/img/stevendee.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >Rev. Steven Dee</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 089 8544 394 </h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook: </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> Assistant Pastor</h3>
                                <img src="{{asset('user/img/brangnan.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >Saya Brang Nan</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 089 636 5032 </h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook: L. Brang Nan</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> Assistant Pastor</h3>
                                <img src="{{asset('user/img/kumhtoi.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >Saya Kum Htoi</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 083 579 6695 </h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook: Kumhtoi Hkangdu
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> သင္းေထာက္</h3>
                                <img src="{{asset('user/img/pouk.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >ကိုေပါက္ေပါက္</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 093 456 7589</h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook: ko pouk
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> သင္းေထာက္</h3>
                                <img src="{{asset('user/img/nawdin.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >ကိုေနာ္ဒင့္</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 083 456 4582</h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook: naw din
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h3 style="text-align:center"> သင္းေထာက္</h3>
                                <img src="{{asset('user/img/brangmai.jpg')}}" alt="img" style="width:200px; height:220px;">
                                <div class="caption">
                                    <h3 style="text-align:center" class="burmese" >ဦးဘန္မိုင္</h3>
                                    <h4 style="text-align:center" class="burmese" >Phone: 095 896 0859</h4>
                                    <h4 style="text-align:center" class="burmese" >Email: </h4>
                                    <h4 style="text-align:center" class="burmese" >facebook:
                                    </h4>
                                </div>
                            </div>
                        </div>



                    </div>


                <!--div class="fb-comments" data-href="https://grace.com" data-numposts="5"></div-->

        </div>


    <hr>

@endsection


@section('footer')
    <script src="{{ asset('user/js/prism.js') }}"></script>
@endsection


