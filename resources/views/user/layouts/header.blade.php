
<!-- Navigation -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background: darkblue;" >
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url('/')}}" style="line-height: 40px;"> <font color="white" > မူလစာမ်က္ႏွာ </font></a>
        </li>
        <li>
            <a href="{{url('/about')}}" style="line-height: 40px;"> <font color="white"> အသင္းေတာ္သမိုင္း </font></a>
        </li>
        <li>
            <a href="{{url('/contact')}}" style="line-height: 40px;"> <font color="white"> ဆက္သြယ္ရန္ </font></a>
        </li>
        <li>
            @if (Auth::guest())
            <a href="{{ route( 'login' ) }}" style="line-height: 40px;"> <font color="white"><font color="white"> ဝင္မယ္ </font></font></a>
                @else
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <font color="white" style="line-height: 40px;"> ထြက္မယ္ </font>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </li>
        </ul>

    <ul class="nav navbar-nav navbar-left">
        <li>
            <a href="{{url('/')}}"> <font color="white" size="5px;"> ခ်င္းမိုင္ေက်းဇူးေတာ္ အသင္းေတာ္ </font></a>
        </li>

    </ul>
</div>
    </div>



<nav class="navbar navbar-default navbar-custom navbar-fixed-top" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>

        </div>
    </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->

    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url(@yield('bg-img'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <p style="color:red; font-size:50px;">@yield( 'title')</p>
                    <hr class="small">
                    <span class="subheading">@yield( 'sub-heading' ) </span>
                </div>
            </div>
        </div>
    </div>
</header>