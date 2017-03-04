<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Lucodeveloper | Tienda Online2')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                Inicio
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shirts')}}">
                    PRODUCTOS
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACTO
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    CARRITO COMPRA
                    <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Consiste en una tienda con las funcionalidades de buscar un producto, agregarlo al carrito 
            de compras, eliminarlo del carrito de compras, editar la cantidad de los productos en el carrito 
            de compras y finalmente simular un pago en el cual se envía el comprobante con el resumen 
            de artículos adquiridos a la base de datos de la aplicación.</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque
                nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <i class="fi-torsos-all"></i>
            <h5>Sigueme</h5>
            <ul class="footer-links">
                <li><a href="https://github.com/cluco91">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/cristian-luco-34a65bb8/">Linkedin</a></li>
                <li><a href="https://twitter.com/ChrisGLD?lang=es">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
