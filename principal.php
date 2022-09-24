<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"> -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="assets/css/widget.css" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
</head>

<body>


 <!--    <div class="appointment offset-md-3 col-lg-6 ">
        <div class="sign-up-form-wrap p-5 ">
            <div class="sign-up-form-header text-center mb-4 ">
                <h4 class="appointment_title mb-2 ">Escríbenos</h4>
                <p>Envíanos tus requerimientos...</p>
            </div> -->

            <!-- <div class="container w-4/12 mx-auto"> -->
            <form action="form.php" method="post" class="form_contact">
                <!-- <div class="mb-4">
                <label for="">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-200">
            </div> -->

                <div class="user_info ">
                    <div class="form-group input-group ">
                        <input type="text " id="nombre" name="nombre" class="form-control "
                            placeholder="Ingrese su nombre " required>
                    </div>

                    <div class="form-group input-group ">
                        <input type="text " id="telefono" name="telefono" class="form-control "
                            placeholder="Ingrese su teléfono " required maxlength="15 "
                            onKeypress="if (event.keyCode < 45 || event.keyCode> 57) event.returnValue = false;">
                    </div>

                    <div class="form-group input-group">
                        <input type="email" id="correo" name="correo" class="form-control"
                            placeholder="Ingrese su correo electrónico" required>
                    </div>

                    <div class="form-group input-group">
                        <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Ingrese su mensaje"
                            required></textarea>
                    </div>

                    <div class="form-group input-group">
                        <div class="h-captcha" data-sitekey=""></div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Enviar Mensaje" id="btnSend" name="btnSend" id="submit" class="btn">

                    </div>
                </div>



                <!-- <button type="submit" class="bg-blue-600 text-white py-3">Suscribirme</button> -->
            </form>
            <!-- </div> -->
<!--         </div>
    </div>
 -->



    <!-- jquery js -->
    <script type="text/javascript " src="assets/js/vendor/jquery-3.2.1.min.js "></script>
    <!-- bootstrap js -->
    <script type="text/javascript " src="assets/js/bootstrap.min.js "></script>
    <!-- carousel js -->
    <script type="text/javascript " src="assets/js/owl.carousel.min.js "></script>
    <!-- counterup js -->
    <script type="text/javascript " src="assets/js/jquery.counterup.min.js "></script>
    <!-- waypoints js -->
    <script type="text/javascript " src="assets/js/waypoints.min.js "></script>
    <!-- wow js -->
    <script type="text/javascript " src="assets/js/wow.js "></script>
    <!-- imagesloaded js -->
    <script type="text/javascript " src="assets/js/imagesloaded.pkgd.min.js "></script>
    <!-- venobox js -->
    <script type="text/javascript " src="venobox/venobox.js "></script>
    <!-- ajax mail js -->
    <script type="text/javascript " src="assets/js/ajax-mail.js "></script>
    <!--  testimonial js -->
    <script type="text/javascript " src="assets/js/testimonial.js "></script>
    <!--  animated-text js -->
    <script type="text/javascript " src="assets/js/animated-text.js "></script>
    <!-- venobox min js -->
    <script type="text/javascript " src="venobox/venobox.min.js "></script>
    <!-- isotope js -->
    <script type="text/javascript " src="assets/js/isotope.pkgd.min.js "></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript " src="assets/js/jquery.nivo.slider.pack.js "></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript " src="assets/js/jquery.meanmenu.js "></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript " src="assets/js/jquery.scrollUp.js "></script>
    <!-- theme js -->
    <script type="text/javascript " src="assets/js/theme.js "></script>
    <!-- jquery js -->

</body>

</html>