<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>
<!-->
   <html class="no-js" lang="en"> <!--<![endif]-->
   <head>

   <meta charset="utf-8">
   <title>@yield('title', '/////#José Antonio Leite Advogados e Associados')</title>

        @include('layout.meta')

        @section('head-script')

                <!--[if lt IE 9]>
                    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <!--[if lt IE 7]>
                            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                        <![endif]-->

               <!--  //aqui carrega-se 2 x ppara evitar problemas de loading cache via CDN -->
{{--           <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
          <script>window.jQuery || document.write('<script src="{{ URL::asset("js/jquery.min.js") }}"><\/script>')</script> --}}


        @show


</head>
<body>


@yield('content')



</body>
@yield('script-js')
</html>