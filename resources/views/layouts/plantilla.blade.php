<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/1.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('logo/LOGO.PNG') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

  <header>
            

    <div class="ancho">

       <div class="logo">
        
        <a href=""><img src="logo/eco.png" alt=""></a>

        </div>

  <div class="buscar">
    
    <input type="text" placeholder="Busca aqui tus productos">
    <i class="icon-search"></i>

  </div>



 <nav>

    <ul>

      <li><a href=""><span class="icon-user"></span> Login</a></li>
      <li><a href=""><span class="icon-location"></span> Caucasia</a></li>
      <li><a href=""><span class="icon-basket"></span> Carrito</a></li>

    </ul>

  </nav>
</div>

</header>

    @yield('content')

    

















</body>
</html>
