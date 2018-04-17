@extends ( 'user.app')

@section( 'bg-img',  Storage::disk('local')->url($post->image))

@section( 'title', $post->title )

@section( 'sub-heading',$post->subtitle )

@section ( 'main-content' )

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <small ><font color="blue:"> Created at {{ $post->created_at-> diffForHumans() }}</font></small>

                    @foreach  ($post->categories as $category)
                        <a href="">  <small style="float:right;" style="margin-right:20px;">
                            <font color="blue:"> {{ $category->name }}</font>
                        </small></a>
                    @endforeach

                    {!! htmlspecialchars_decode( $post->body) !!}

                    {{-- Tag Cloud --}}
                    <h3> Tag Clouds</h3>
                    @foreach  ($post->tags as $tag)
                        <a href="">    <small style="margin-right:20px; border-radius: 5px; border: 1px solid gray; padding: 5px;">
                            <font color="blue:"> {{ $tag->name }}</font>
                        </small></a>
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
            </div>
        </div>
    </article>

    <hr>

@endsection




