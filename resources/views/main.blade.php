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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget lacus quis est blandit maximus at ut leo. Maecenas luctus velit quis erat luctus sodales non sed nisl. Etiam euismod mauris sed eleifend porttitor. Integer in neque pellentesque, fermentum odio posuere, faucibus tortor. Mauris dapibus ex ac felis porta, sed imperdiet est molestie. Aliquam sollicitudin tellus ac nisl ullamcorper volutpat. Morbi diam eros, fermentum at augue eget, condimentum posuere lacus. Sed in pharetra nunc. In vitae dolor vel orci luctus hendrerit ut sed nulla. Fusce at risus nec ex ullamcorper hendrerit eu a velit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper viverra est sit amet tempor. Duis at urna justo. Morbi mollis vel urna vel ultrices. Nam elementum, diam id blandit scelerisque, dolor tellus egestas nulla, vitae facilisis ante quam ac orci. Vivamus commodo lacus in tortor pellentesque viverra. Nullam ultricies vitae est vitae sollicitudin. Nulla facilisi. Nam ac molestie nisi. Nam auctor nunc vitae ipsum aliquam malesuada. Donec tincidunt nisl ante, quis volutpat ante consequat sagittis.</p>
            </div>
        </section>

        <section id="services" class="services">
            <div class="services__container">
                <h2 class="services__title">Nuestros Servicios</h2>
                <p class="services__description">Suajes3E es una empresa especializada en la fabricación de cajas troqueladas y grabados de alta calidad en fotopolímero para imprimir diseños y logotipos en cartón. Sus cajas troqueladas están hechas con suajes precisos y eficientes que permiten obtener diferentes formas y diseños de manera personalizada según requerimientos específicos del producto o estética. Además, ofrecen la opción de incluir ventanas para mostrar el contenido al público. Sus grabados se montan en cilindros porta-cliché para garantizar el mejor rendimiento en la máquina, y siempre están hechos a medida para satisfacer las necesidades específicas de cada cliente y lograr la mejor apariencia de impresión. Con la tecnología y el conocimiento necesarios, Suajes3E ofrece servicios de alta calidad y resistencia para asegurar la satisfacción de sus clientes.</p>
                <div class="service mr">
                    <h3 class="service__title">Suajes</h3>
                    <p class="service__description">En Suajes3E somos especialistas en la fabricación suajes para cajas troqueladas, un proceso que permite obtener cajas de diferentes formas y diseños de manera precisa y eficiente. Estas cajas se personalizan según requerimientos específicos del producto o estética, incluso con ventanas para mostrar el contenido al público. La tecnología y conocimiento necesarios aseguran alta calidad y resistencia en la fabricación de las cajas troqueladas.</p>
                    <div class="gallery">
                        <img class="gallery__image" src="{{asset('img/landing/suajecurvo.png')}}" alt="suaje curvo terminado" />
                        <img class="gallery__image" src="{{asset('img/landing/suajeplano.png')}}" alt="Suaje Plano" />
                        <img class="gallery__image" src="{{asset('img/landing/produccionsuajecurvo.png')}}" alt="Suaje curvo en produccion" />
                    </div>
                </div>

                <div class="service ml">
                    <h3 class="service__title">Grabados</h3>
                    <p class="service__description">En Suajes3E ofrecemos servicios de grabado de alta calidad en fotopolímero para imprimir logotipos y diseños en cartón. Nuestros grabados se montan en cilindros porta-cliché para garantizar un rendimiento óptimo en la máquina. Además, ofrecemos opciones personalizadas para satisfacer las necesidades específicas de cada cliente y lograr la mejor apariencia de impresión.</p>
                    <br>
                    <div class="gallery">
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 1" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 2" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 3" />
                    </div>
                </div>
            </div>
        </section>


        <section class="customers" id="customers">
            <h2>Clientes</h2>
            <div class="customers-container">           
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
            </div>
            
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

