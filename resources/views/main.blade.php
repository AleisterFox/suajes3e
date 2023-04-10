<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Somos una empresa especializada en la producción de suajes para diferentes tipos de industrias">
        <meta name="keywords" content="suajes, producción, industrias, corte, grabado, carton, cajas, troquelado, plecas">
        <title>Suajes3E</title>
        <link href="{{asset('img/brand/favicon.ico')}}" rel="icon" type="image/png">
        <link rel="stylesheet" href="{{asset('/css/styles2.css')}}"/>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    </head>
    <body onload="clickOnNext()">
        <header>
            <div class="container">
                <a href=""><img src="{{asset('img/brand/logo.png')}}" alt="logo-suajes3e" class="logo"></a>
                <nav>
                    <div class="menu-btn">
                        <div class="menu-btn__burger" id="burguer"></div>
                    </div>
                    <ul class="nav-list">
                        <li><a href="#hero">Inicio</a></li>
                        <li><a href="#about-us">Nosotros</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#customers">Clientes</a></li>
                        <li><a href="#contact-us">Contactanos</a></li>
                        <li><a href="./home">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section  class="hero" id="hero">
            <h1>Suajes 3E</h1>
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="{{asset('img/landing/suaje1.jpeg')}}" alt="Suaje Plano" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset('img/landing/suaje2.jpeg')}}" alt="Suaje Plano" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset('img/landing/suaje3.jpeg')}}" alt="Suaje Curvo" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset('img/landing/suaje4.jpeg')}}" alt="Suaje curvo" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset('img/landing/suaje5.jpeg')}}" alt="Suaje curvo instalado" class="slider__img">
                </div>
            </div>
            <div class="slider__btn slider__btn--right" id="btn-right" onclick="Next()">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left" onclick="Previous()">&#60;</div>
        </section>

        <section id="about-us" class="about-us">
            <div class="about-us__container">
                <h2>Sobre nosotros</h2>
                <p>Suajes3E inicia sus operaciones en la ciudad de Celaya, Guanajuato en el año 2018, en la fabricación de suajes y clichés de impresión para cartón, y a partir de la contingencia se innovó en el área de plástico. Actualmente seguimos en la búsqueda de nuevos mercados. ​</p> <br>
                <p>Suajes3E se encuentra avalado con mas de 30 años de conocimiento y experiencia del Ing. Narcizo Elías Olivarez, el apoyo incondicional y profesional de su señora esposa la Lic. María del Rosario Granados Frías. </p> <br> 
                <p>En Suajes3E somos un equipo de colaboradores comprometidos con el servicio y calidad que nuestros clientes requieren.</p>
            </div>
        </section>

        <section id="services" class="services">
            <div class="services__container">
                <h2 class="services__title">Nuestros Servicios</h2>
                <p class="services_description">Suajes3E se especializa en:</p>
                <div class="services_images">
                    <div class="services_images--item">
                        <h3>Asesoria y Diseño</h3>
                        <img src="{{asset('/img/landing/Asesorias.jpeg')}}" alt="diseño de cliche">
                        <p>Asesoría y diseño de clichés de impresión en placa digital. Así como del suaje, mediante software de vanguardia acorde a los requerimientos de nuestros clientes.</p>
                    </div>
                    <div class="services_images--item">
                        <h3>Trato Directo</h3>
                        <img src="{{asset('/img/landing/trato_directo.jpg')}}" alt="Imagen de hombre haciendo trato">
                        <p>Contacto directo con nuestro director y asesor.</p>
                    </div>
                    <div class="services_images--item">
                        <h3>Fabricacion</h3>
                        <img src="{{asset('/img/landing/Fabricacion.png')}}" alt="Suaje plano y rotativo">
                        <p>Fabricacion de suajes planos y rotativos.</p>
                    </div>
                    <div class="services_images--item">
                        <h3>Diseño de proyectos</h3>
                        <img src="{{asset('/img/landing/Desarrollo_proyectos.jpg')}}" alt="imagen de negociacion">
                        <p>Desarrollo en diseño de proyectos de empaque.</p>
                    </div>
                    <div class="services_images--item">
                        <h3>Asistencia Tecnica</h3>
                        <img src="{{asset('/img/landing/Asistencia_tecnica.jpg')}}" alt="Asistencia tecnica">
                        <p>Como una ventaja competitiva hacia nuestros clientes, la asistencia técnica personalizada en el área de producción y cartón.</p>
                    </div>
                </div>
                <div class="service mr">
                    <h3 class="service__title">Suajes</h3>
                    <p class="service__description">Es una pieza de madera con reglas de metal incrustadas, las cuales tienen bordes de corte y/o doblez. Contiene hule botador (que ayuda a que el cartón sea expulsado de las figuras de corte). En Suajes3E, nos especializamos en 2 tipos de suajes, tales como:</p>
                    <ul class="service__description">
                        <li>Suaje Plano</li>
                        <li>Suaje Rotativo</li>
                    </ul>
                    <div class="gallery">
                        <img class="gallery__image" src="{{asset('img/landing/suajerotativo.jpeg')}}" alt="suaje curvo terminado" />
                        <img class="gallery__image" src="{{asset('img/landing/suajeplano.png')}}" alt="Suaje Plano" />
                        <img class="gallery__image" src="{{asset('img/landing/suajeplano.jpeg')}}" alt="Suaje Plano" />
                    </div>
                </div>
                <div class="service ml">
                    <h3 class="service__title">CLICHÉS DE IMPRESIÓN PARA CARTON</h3>
                    <p class="service__description">El cliché para impresión es una pieza fabricada en goma con forma de placa, esta pieza se ocupa de recabar la tinta de otra bobina cargada y la superficie en relieve del cliché la recoge y estampa el diseño en la caja o en el producto escogido. En Suajes3E nos especializamos en diseñar el cliché ideal para su empaque.</p>
                    <br>
                    <div class="gallery">
                        <img class="gallery__image" src="{{asset('img/landing/grabado1.jpeg')}}" alt="Grabado" />
                        <img class="gallery__image" src="{{asset('img/landing/grabado2.jpeg')}}" alt="Grabado" />
                        <img class="gallery__image" src="{{asset('img/landing/grabado3.jpeg')}}" alt="Grabado" />
                    </div>
                </div>
            </div>
        </section>


        <section class="customers" id="customers">
            <h2>Nuestros Clientes</h2>
            <div class="slider" id="customers-slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="{{asset('img/landing/logo_keypack.png')}}" alt="Logo Keypack Solutions">
                        <p>Keypack Solutions</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/licbox_logo.png')}}" alt="Logo Licbox">
                        <p>LicBox</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/rctools_logo.jpg')}}" alt="Logo RC Tools">
                        <p>RcTools</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/logo_novakraft.png')}}" alt="Logo Novakraft">
                        <p>Novakraft</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/logo_prismapack.png')}}" alt="Logo Prismapack">
                        <p>Prismapack</p>
                    </div>

                    <div class="slide">
                        <img src="{{asset('img/landing/logo_keypack.png')}}" alt="Logo Keypack Solutions">
                        <p>Keypack Solutions</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/licbox_logo.png')}}" alt="Logo Licbox">
                        <p>LicBox</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/rctools_logo.jpg')}}" alt="Logo RC Tools">
                        <p>RcTools</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/logo_novakraft.png')}}" alt="Logo Novakraft">
                        <p>Novakraft</p>
                    </div>
                    <div class="slide">
                        <img src="{{asset('img/landing/logo_prismapack.png')}}" alt="Logo Prismapack">
                        <p>Prismapack</p>
                    </div>
                </div>
            </div>
            <!-- <div class="customers-container">           
                <div class="customer-item">
                    <img src="https://via.placeholder.com/150x150" alt="">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</q>
                    <cite>Cliente 1</cite>
                </div>
                <div class="customer-item">
                    <img src="https://via.placeholder.com/150x150" alt="">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</q>
                    <cite>Cliente 2</cite>
                </div>
                <div class="customer-item">
                    <img src="https://via.placeholder.com/150x150" alt="">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</q>
                    <cite>Cliente 3</cite>
                </div>
            </div> -->
            
        </section>
        

        <section id="contact-us" class="contact-us">
            <h2>Contáctanos</h2>
            <div class="contactBody">   
                <div class="wrapper">

                    <form action="send.php" method="post" class="form">
                        <input type="text" class="name entry" name="name" id="name" placeholder="Your Name"/>
                    
                        <input type="text" class="email entry" name="email" id="email" placeholder="Email"/>
                    
                        <textarea class="message entry" name="message" id="message" placeholder="Message"></textarea> 
                    
                        <button class="submit entry">Submit</button>
                    </form>  
                    
                    <div class="shadow"></div>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer__container">
                <div class="footer__container-copy">
                    <p>&copy; 2023 Todos los derechos reservados|Suajes3E</p>
                    <p>Contacto: narcizo1027@gmail.com</p>
                </div>
                <div class="footer_container-rrss">
                    <a href="https://www.facebook.com/profile.php?id=100083306463586" target="_blank"><i class="fa fa-facebook" style="color: white;"></i></a>
                    <a href="https://www.linkedin.com/company/suajes3e" target="_blank"><i class="fa fa-linkedin" style="color: white;"></i></a>
                </div>
            </div>
        </footer>
        <script>
            function clickOnNext() {
                setTimeout (function() {
                    btnRight.click();
                    clickOnNext();
                }, 5000);
            }
        </script>
        <script src="{{asset('/js/script.js')}}"></script>
    </body>

</html>

