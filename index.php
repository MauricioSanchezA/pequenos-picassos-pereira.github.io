<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pequeños Picassos</title>
    <Link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="progress-bar">
            <div id="progress" class="progress"></div>
        </div>
        <nav>
            <a href="#noviembre" onclick="seleccionar()">
                <h6>Fotos</h6>
            </a>
            <a href="#acerca" onclick="seleccionar()">
                <h6>Acerca de</h6>
            </a>
            <a href="#portafolio" onclick="seleccionar()">
                <h6>Portafolio</h6>
            </a>
            <a href="#servicio" onclick="seleccionar()">
                <h6>Servicios</h6>
            </a>
            <a href="#seguir" onclick="seleccionar()">
                <h6>Contacto</h6>
            </a>
            <a href="#llegar" onclick="seleccionar()">
                <h6>Como llegar</h6>
            </a>
            <a href="#redes" onclick="seleccionar()">
                <h6>Redes sociales</h6>
            </a>
        </nav>

        <section id="" class="textos-header">
            <div class="headers-video">
                <video src="/video/pexels-artem.mp4" autoplay muted loop></video>
            </div>
            <div class="headers-overly"></div>
            <div class="headers-content">
                <h1>Pequeños Picassos entretenimiento para ti</h1>
                <h2>arte y diversión</h2>
            </div>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C224.32,164.31 348.47,-57.70 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #ffffff;"></path>
            </svg></div>
    </header>

    <h2 id="noviembre" class="titulo">¡ Te esperamos en Diciembre !</h2>
    <div class="gallery js-flickity" data-flickity-options='{"WrapAround":true}'>
        <div class="gallery-cell">
            <img src="/img/Diciembre_01 (3).jpg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Slider (6).jpeg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Diciembre_01 (2).jpg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Diciembre_01 (4).jpg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Diciembre_01 (5).jpg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Slider (4).jpeg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Slider(10).jpeg" alt="">
        </div>
        <div class="gallery-cell">
            <img src="/img/Slider (14).jpeg" alt="">
        </div>
    </div>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 id="acerca" class="titulo">Acerca de Nosotros</h2>
            <div class="Contenedor-sobre-nosotros">
                <img src="img/nosotro_1.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Productos pensados</h3>
                    <p>Nuestros productos son pensados en desarrollar las habilidades motríces y mentales de los
                        pequeños, estimulando su intelecto, su coordinación e iniciativa; tambíen son productos que
                        disfrutan los padres.
                    </p>

                    <h3><span>2</span>Los mejores productos</h3>
                    <p>Son productos en materiales resistentes y que no representan peligro para los pequeños, no
                        obstante,
                        el cuidado de nuestros niños es fundamental en todo momento; su compañia en la etapa de
                        entretenimiento es importante.
                    </p>
                </div>
            </div>
        </section>

        <section class="portafolio">
            <div class="contenedor">
                <h2 id="portafolio" class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/marvel.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Figuras Marvel</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/hombre_arana.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Figuras Hombre araña</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/PLASTILINA2.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Plastilna</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/RELOJ_1.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Reloj</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/huevos.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Huevo Sorpresa</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/PINTURA ACUARELA.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Pintura en acuarela</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/PRODUCTOS (2).jpg" alt="">
                        <div class="hover-galeria">
                            <p>Domino</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/PROCUCTOS7.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Figuras Plastilina</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/SLIME.jpeg" alt="">
                        <div class="hover-galeria">
                            <p>Slime</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/PROYECTORES PARA DIBUJAR.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Proyector</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/TETRIS JUEGO DIDACTICO.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Tetris Didáctico</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/TABLETA MAGICA PARA PINTAR Y APRENDER.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Tableta mágica</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cliente-contenedor" alt="">
            <h2 class="titulo">Nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/CLIENTE1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Angélica</h4>
                        <p>Desarrollo de las capacidades creativas en los niños, de motricidad y cognitivas de los
                            diferentes colores para lograr una armonia en el dibujo, tambien desarrollar destrezas
                            para convinar estilos.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/CLIENTE2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Samira</h4>
                        <p>Integrar conocimientos y técnicas que permitan a los niños, interactuar con otros elementos
                            disponibles en el medio. Al estar en contacto con mas niños, permite la interacción con los
                            démas logrando asi una interrelación con sus compañeros.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-service" alt="">
            <div class="contenedor">
                <h2 id="servicio" class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/imagen_20.png" alt="">
                        <h3>Entretenimiento</h3>
                        <p>Brindamos una opción de entretenimiento, que permite desarrollar en los niños cualidades
                            artisticas como lo son la pintura y el dibujo.
                        </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ROMPECABEZAS-JUEGOS DIDACTICOS.jpg" alt="">
                        <h3>Productos Didácticos</h3>
                        <p>Mas que juguetes son productos que motivan la mente y la destreza motriz, ya que estos juegos
                            requieren de razonamiento y algunos mas de coordinación en su elaboración.
                        </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/familiar_1.jpg" alt="">
                        <h3>Participación familiar</h3>
                        <p>Para los pequeños, es importante contar con el apoyo de su padres en las actividades que
                            realizan; por ello incentivamos actividades donde los padres puedan involucrarse
                            directamente con los niños, asi fortalecemos la confianza de ellos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="servicio-navi">
                <h2>FELIZ NAVIDAD</h2>
                <p>Esta época nuestros pequeños disfrutan al máximo, por eso queremos
                    brindarles
                    la mejor atención y diversión en estas festividades decembrinas.
                </p>
            </div>
            <div class="ratio ratio-16x9">
                <video src="/video/WhatsApp Video 2022-12-01 at 9.10.11 AM.mp4" autoplay muted loop></video>

            </div>
        </section>

        <section class="Follow-me" alt="">
            <div id="redes" class="contenedor-redes">
                <img src="img/Logo.png" alt="" class="imagen-about-us">
                <h2 class="titulo">Contactos</h2>
                <h3 id="seguir" class="titulo">Visitanos en:</h3>
                <a href="https://www.facebook.com/Peque%C3%B1os-Picassos-Pereira-108755635014231" target="blank">
                    <div class="wrapper">
                        <div class="icon facebook">
                            <div class="tooltip">Facebook</div>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </div>
                </a>
                <div class="icon twitter">
                    <div class="tooltip">Twitter</div>
                    <span><i class="fab fa-twitter"></i></span>
                </div>

                <a href="https://www.instagram.com/pequenospicassosofficial" target="blank">
                    <div class="icon instagram">
                        <div class="tooltip">instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=Hnr3E3rqGU0" target="blank">
                    <div class="icon youtube">
                        <div class="tooltip">YouTube</div>
                        <span><i class="fab fa-youtube"></i></span>
                    </div>
                </a>
            </div>

            </div>

        </section>

        <section class="ubica" alt="">
            <div class="contenedor-ub">
                <h2 id="llegar" class="titulo">Nos encuentras en</h2>
                <div class="imagen">
                    <iframe class="two-columns"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.9459650489804!2d-75.68395649173092!3d4.8071349390394795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38873c119cbc4b%3A0x71bb3a3f6879aed3!2sCentro%20Comercial%20Parque%20Arboleda!5e0!3m2!1ses-419!2sco!4v1663537195923!5m2!1ses-419!2sco"
                        width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <img class="two-columns" src="img/UBICACIONPP_1.jpg" width="550" height="450" alt="">
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="conten-foo">
                <h4>Celular</h4>
                <p>3014894222</p>
            </div>
            <div class="conten-foo">
                <h4>Correo electrónico</h4>
                <p>pequenospicassos2022@gmail.com</p>
            </div>
            <div class="conten-foo">
                <h4>Ubicación</h4>
                <p>Pereira</p>
                <p>Centro Comercial Arboleda</p>
                <p>Piso 4</p>
            </div>
        </div>
        <h2 class="titulo-final"> &copy; 2022 Mauricio Sánchez Abella</h2>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <script src="/script.js"></script>
</body>

</html>
