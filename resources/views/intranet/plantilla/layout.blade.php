<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Intranet')</title>

  <style>
	*{
		font-family: 'Segoe UI';
	 }
  </style>
</head>
<body>
  <header>
  	<h1>Intranet</h1>
	 @include('intranet.plantilla.partials.navbar')
	 @yield('head')
  </header>

  <main>
  	@yield('body')
  </main>

  <footer>
  	@yield('foot')
  </footer>
</body>
</html>
