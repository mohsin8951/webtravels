<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="public/css/style.css" media="screen" >
        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Website Travels')">
        <meta name="author" content="@yield('meta_author', 'Nuthan')">

        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langRTL
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
        @endif

        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <!-- <div class="container"> -->
                @include('includes.partials.messages')

                @yield('content')

            <!-- </div> -->
            <!-- container -->
        </div><!--#app-->

        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')
        @include('includes.partials.ga')
    </body>
@include('frontend.includes.footer')
</html>
<style>
section#slider {
    padding: 40px 0;
}
.navbar-default {
    background-color: #232f3e !important;
    border-color: #d3e0e9;
}
.navbar {
    position: relative;
    min-height: 50px;
  margin-bottom: 0px !important;
    border: 1px solid transparent;
}
.carousel-inner {
    overflow: hidden;
    width: 100%;
    height: 550px !important;
}
.decs {
    text-align: justify;
    max-width: 281px;
}
.post {
    line-height: 28px;
}
footer.footer {
    background-color: #232f3e;
    padding: 30px 0;
}
.site-links ul li {
    list-style: none;
}
.site-links ul li a {
    color: #fff;
}
.powered {
    margin-top: 20px;
}
</style>
