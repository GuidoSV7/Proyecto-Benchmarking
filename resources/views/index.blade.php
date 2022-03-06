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

    <link rel="stylesheet" href="css/font-awesome.css">

</head>
<body>

    <nav>
        <ul>
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#galeria">Categorias</a></li>
          <li><a href="#footer">Contactanos</a></li>

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
      
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="img/uno.jpg" class="img-galeria" alt="Hola">
                    <img src="img/dos.jpg" class="img-galeria" alt="">
                    <img src="img/tres.jpg" class="img-galeria" alt="">
                    <img src="img/cuatro.jpg" class="img-galeria" alt="">
                    <img src="img/cinco.jpg" class="img-galeria" alt="">
                    <img src="img/seis.jpg" class="img-galeria" alt="">
                    <img src="img/uno.jpg" class="img-galeria" alt="Hola">
                    <img src="img/dos.jpg" class="img-galeria" alt="">
                    <img src="img/tres.jpg" class="img-galeria" alt="">
                    <img src="img/cuatro.jpg" class="img-galeria" alt="">
                    <img src="img/cinco.jpg" class="img-galeria" alt="">
                    <img src="img/seis.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>

        <section class="gallery-caracteristicas">
            <div class="contenedor-caracteristicas">
                <div class="contenedor-caracteristicas-galeria">
                    <div class="contenedor-caracteristicas-galeria-div">
                        <h2>Medico General</h2>
                        <img src="img/cinco.jpg" alt="Imagen Caracteriticas" class="contenedor-caracteristicas-galeria-div-img">
                    </div>
                    <div class="contenedor-caracteristicas-galeria-div">
                        <h2>Desparacitación</h2>
                        <img src="img/cinco.jpg" alt="Imagen Caracteriticas" class="contenedor-caracteristicas-galeria-div-img">
                    </div>
                    <div class="contenedor-caracteristicas-galeria-div">
                        <h2>Veterinaria</h2>
                        <img src="img/cinco.jpg" alt="Imagen Caracteriticas" class="contenedor-caracteristicas-galeria-div-img">
                    </div>
                </div>
            </div>
        </section>
      


        <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fa fa-user-circle"></span>
                    <h2>INFORMACION<br>DE CONTACTO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> Guido.salazar.vargas7@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> 72669261</p>
                </section>
            </section>
    
            <form action="php/enviar.php" method="post" class="form_contact">
                <h2>Envia un mensaje</h2>
                <div class="user_info">
                    <label for="names">Nombres *</label>
                    <input type="text" id="names" name="nombre" required>
    
                    <label for="phone">Telefono / Celular</label>
                    <input type="text" id="phone" name="telefono">
    
                    <label for="email">Correo electronico *</label>
                    <input type="text" id="email" name="correo" required>
    
                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
    
                    <input type="submit" value="Enviar Mensaje" id="btnSend">
                </div>
            </form>
    
        </section>






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


    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</body>
</html>