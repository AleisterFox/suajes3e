<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Suajes3E</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset ('/css/styles2.css')}}" />
    </head>
    <body onload="clickOnNext()">
        <header>
            <div class="container">
                <a href=""><img src="{{asset ('img/brand/logo.png')}}" alt="logo-suajes3e" class="logo"></a>
                <nav>
                    <div class="menu-btn">
                        <div class="menu-btn__burger" id="burguer"></div>
                    </div>
                    <ul class="nav-list">
                        <li><a href="#hero">Inicio</a></li>
                        <li><a href="#about-us">Nosotros</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#contact-us">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="hero" class="hero">
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="{{asset ('img/carrusel/suaje1.jpg')}}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset ('img/carrusel/suaje2.jpg')}}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset ('img/carrusel/suaje3.jpg')}}" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="{{asset ('img/carrusel/suaje4.png')}}" alt="" class="slider__img">
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
                <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget lacus quis est blandit maximus at ut leo. Maecenas luctus velit quis erat luctus sodales non sed nisl. Etiam euismod mauris sed eleifend porttitor. Integer in neque pellentesque, fermentum odio posuere, faucibus tortor. Mauris dapibus ex ac felis porta, sed imperdiet est molestie. Aliquam sollicitudin tellus ac nisl ullamcorper volutpat. Morbi diam eros, fermentum at augue eget, condimentum posuere lacus. Sed in pharetra nunc. In vitae dolor vel orci luctus hendrerit ut sed nulla. Fusce at risus nec ex ullamcorper hendrerit eu a velit.</p>
                <div class="service mr">
                    <h2 class="service__title">Suajes</h2>
                    <p class="service__description">Descripción del servicio 1.</p>
                    <div class="gallery">
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 1 - Imagen 1" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 1 - Imagen 2" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 1 - Imagen 3" />
                    </div>
                </div>

                <div class="service ml">
                    <h2 class="service__title">Grabados</h2>
                    <p class="service__description">Descripción del servicio 2.</p>
                    <div class="gallery">
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 1" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 2" />
                        <img class="gallery__image" src="https://via.placeholder.com/150x150" alt="Servicio 2 - Imagen 3" />
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonials">
            <h2>Clientes</h2>
            <div class="testimonials-container">
                
                <div class="testimonial-item">
                    <img src="https://via.placeholder.com/150x150" alt="">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</q>
                    <cite>Cliente 1</cite>
                </div>
                <div class="testimonial-item">
                    <img src="https://via.placeholder.com/150x150" alt="">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</q>
                    <cite>Cliente 2</cite>
                </div>
                <div class="testimonial-item">
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

                    <form class="form">
                        <input type="text" class="name entry " placeholder="Your Name"/>
                    
                        <input type="text" class="email entry" placeholder="Email"/>
                    
                        <textarea class="message entry" placeholder="Message"></textarea> 
                    
                        <button class="submit entry" onclick="thanks()">Submit</button>
                    </form>  
                    
                    <div class="shadow"></div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>Contacto: correo@miempresa.com | teléfono: 555-1234 | Dirección: Calle 123, Ciudad, País</p>
                <p>Todos los derechos reservados &copy; 2023</p>
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
        <script src="{{asset('js/script.js')}}"></script>
    </body>

</html>

