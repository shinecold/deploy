@extends( 'user.app' )
@section( 'bg-img',  asset( 'user/img/church_1.jpg') )
@section( 'title', 'ခ်င္းမိုင္ေက်းဇူးေတာ္ အသင္းေတာ္' )
@section( 'sub-heading', 'လူအေပါင္းတို႔သည္ ကယ္တင္ျခင္းသို႔ေရာက္၍ သမၼာတရားကို သိေစျခင္းငွါ၊ ဘုရားသခင္ အလုိေတာ္ရွိ၏။ ( ၁ တိေမာေသ ၂ း ၄။)' )

@section ( 'main-content' )
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach ($posts as $post)
                <div class="post-preview">
                <a href="{{ route( 'post', $post->slug) }}"> <!-- *link on blog-->
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                       {{ $post->subtitle }}
                    </h3>
                </a>
                <p class="post-meta"><!--a href="#"></a--> {{ $post->created_at->diffForHumans() }}</p>
            </div>
            @endforeach
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    {{ $posts->links() }}
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
@endsection