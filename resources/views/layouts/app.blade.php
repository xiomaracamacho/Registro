<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100">

        
        
    </header>
<main class="container mx-auto mt-10">
    <h2 class="font-black text-2xl text-center mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
    
   <footer class="text-center p-5 text-gray-600 font-bold uppercase">
   Registro de Usuarios - Todos los derechos reservados {{date ("Y")}}
   </footer>
       
    </body>
</html>