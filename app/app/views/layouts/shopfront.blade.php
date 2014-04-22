<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title', 'China PPE Industry Experts') | I Love PPE</title>

    {{ Asset::stylesheet('iloveppe.min.css') }}

  </head>
  <body>

          <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41056890-5', 'loveppe.com');
  ga('send', 'pageview');

        </script>

    @include('partials.top-nav')

    <div class="row container @yield('containerClass')">
      @yield('content')
    </div>

    {{ Asset::script('iloveppe.min.js') }}
  </body>
</html>