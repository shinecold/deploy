<!-- Footer -->
<footer style="background-color: darkgrey; text-align: center;">
    <div class="container" >
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >

                         <strong style="color:blue" >Copyright &copy; 2018-{{ Carbon\carbon::now()->year }} All rights</strong>

            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('user/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('user/js/contact_me.js') }}"></script>

<!-- Theme JavaScript -->
<script src="{{ asset('user/js/clean-blog.min.js') }}"></script>

@section ( 'footer' )

@show