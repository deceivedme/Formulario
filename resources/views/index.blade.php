<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
     <style>
        :root {
    --color-dark: #15181f;
    --color-dark-x: #2d343f;
    --color-dark-xx: #1f232b;
    --color-light: #ffffff;
    --color-grey: #f5f6f8;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 1.1rem;
            font-weight: 300;
            background-color: var(--color-grey);
            color: var(--color-light);
            letter-spacing: 0.05rem;
            height: 100vh;
        }

        .bg-light {
            background-color: var(--color-light) !important;
        }

        .bg-dark {
            background-color: var(--color-dark) !important;
        }

        .p-6 {
            padding: 0 7rem;
        }

        .contact-box {
            /* padding: 3rem; */
        }

        .btn {
            font-weight: 400;
            padding: 1rem 2rem;
            border-radius: 5rem;
            min-width: 10rem;
        }

        .btn-outline-dark {
            border: 2px solid var(--color-dark-xx);
        }

        .form-control {
            background-color: var(--color-dark-xx);
            border: 2px solid var(--color-dark-xx);
            border-radius: 0.2rem;
            padding: 1.5rem 1rem;
        }

        .register-bg {
            /* background-image: url("public/images/hero.jpg");     */
            background-image: url("https://i.pinimg.com/564x/6c/33/e4/6c33e4958b81624198a12348b5172982.jpg");
            /* background-image: url("https://i.pinimg.com/originals/6b/10/14/6b101427e73dc4229080be613f8451d9.gif"); */
            
            

            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .testiomonial {
            bottom: 10px;
        }

        @media (max-width: 575.98px) {
            .p-6 {
                padding: 2rem;
            }

            .contact-box {
                padding: 0;
            }

            .width-100 {
                width: 100%;
            }
        }

        @media (max-width: 1200px) {
            .register-bg {
                min-height: 50vh;
            }
        }
    </style> 




    <title>Hello, world!</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
        
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Computacion e Informatica.</h3>
                <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">REGISTRO A LA SEMANA INFORMÁTICA</h1>
                    <p class="text-muted mb-3">Accede a nuestras Plataformas.</p>
                    <div class="form-group">

                        {{-- BOTTON YOUTUBE --}}
                        <button  class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100" onclick=" location.href='https://www.youtube.com/channel/UCAt_qadPkm7vufKdhpS18kw'"><i class="icon ion-logo-youtube lead align-middle mr-2"></i>Youtube  </button>

                        {{-- BOTTON FACEBOOK --}}
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100" onclick=" location.href='https://www.facebook.com/profile.php?id=100074506975087' "><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
    
                        {{-- BOTTON Twitch   --}}
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100" onclick=" location.href='https://www.twitch.tv/duskalor' "><i class="icon ion-logo-twitch lead align-middle mr-2"></i> Twitch</button>

                        
                    </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <form method="POST" action="/">
                        @csrf
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" placeholder="Tu nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="apellido" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="correo" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Numero de Telefono <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="numero" placeholder="Ingresa su telefono">
                        </div>
                        
                       <div class="form-group mb-3">
                             <label class="font-weight-bold" for="sel1">Semestre <span class="text-danger">*</span></label>
                             <select class="custom-select"  style="background:#1f232b;color:#6c757d;border:0px " id="sel1">

                             <optgroup>  
                                <option value="ninguno"> No pertenezco a la Institución </option>                               
                                <option value="2do"> 2do Semestre </option>
                                <option value="3ro"> 4to Semestre </option>
                                <option value="4to"> 6to Semestre </option>
                            </optgroup> 

                            </select>                             
                             
                        </div>
                           

                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn btn-primary width-100">Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2021 Instituto Superior Tecnologico Tupac Amaru - CUSCO</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/digital/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>