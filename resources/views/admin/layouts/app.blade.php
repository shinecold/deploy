<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    @include ( 'admin.layouts.head' )
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    @include ( 'admin.layouts.header' )
    @include ( 'admin.layouts.sidebar' )
    @section ( 'main-content' )
        @show

    @include ( 'admin.layouts.footer' )


</div>

</body>
</html>