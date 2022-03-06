<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Mascotas</title>
    <link rel="stylesheet" href="{{asset('Css/estilos.css')}}" >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="categorias">Categorias</a></li>
            <li><a href="contactanos">Contactanos</a></li>

        </ul>
        <div class="hide">
          <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </div>
      </nav>


    <header class="header" id="inicio">
        <div class="contenedor head">
            <h1 class="titulo">Hogar para las mascotas sin hogar</h1>
            
        </div>
        
    </header>
    <main>
      
       



    </main>
    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <p>Gracias por estar con nosotros</p>
                </div>
        </div>
        <div class="line"></div>
    </footer>

     <!--SCRIPTS-->
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script>
       $(".hide").on('click', function() {
         $("nav ul").toggle('slow');
       })
     </script>

    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>