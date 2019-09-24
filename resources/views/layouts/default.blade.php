<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'vlynn.gg - Laravel Primer')</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div clsss="container">
      <div class="col-md-offset-1 col-md-10">
		  @yield('content')
      @include('layouts._footer')
      </div>
    </div>
</body>
</html>