<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title', 'I Love PPE') </title>

    {{ AssetHelper::stylesheet('iloveppe.min.css') }}

  </head>
  <body>

    @include('partials.top-nav')

    <div class="row container @yield('containerClass')">
      @yield('content')
    </div>

    {{ AssetHelper::script('iloveppe.min.js') }}
  </body>
</html>