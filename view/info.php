<!DOCTYPE html>
<html>
    <head>
        <title>dalispa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggoyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                font-family: 'Noto Serif', serif;
                background-color: #f8f9fa;
            }
            .navbar {
                text-align: center;
                width: 100%;
            }
            .topmenu {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 0;
                margin: 0;
                list-style: none;
            }
            .topmenu > li {
                margin: 5px 0;
            }
            .topmenu > li > a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: #fff;
                background: #93815E;
                border-radius: 5px;
                width: 100%;
                text-align: center;
            }
            .submenu {
                display: none;
                list-style: none;
                background: #93815E;
                padding: 0;
            }
            .topmenu > li:hover .submenu {
                display: block;
            }
            .submenu > li > a {
                padding: 5px;
                background: #93815E;
                border-radius: 5px;
            }
            .divBox {
                padding: 20px;
            }
            @media (min-width: 768px) {
                .topmenu {
                    flex-direction: row;
                    justify-content: space-around;
                }
                .topmenu > li {
                    margin: 0;
                }
                .topmenu > li > a {
                    width: auto;
                }
                .submenu {
                    position: absolute;
                    display: none;
                }
                .topmenu > li:hover .submenu {
                    display: block;
                    background: #93815E;
                    position: absolute;
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                }
                .submenu > li {
                    margin: 0;
                }
                .submenu > li > a {
                    width: 200px;
                }
            }
            .container, .contact-info, .map-container {
                width: 100%;
                max-width: 800px;
                margin: 20px;
            }
            .about-section, .contact-info, .map-container {
                text-align: center;
            }
            .map-container iframe {
                width: 100%;
                height: 450px;
            }
        </style>
    </head>
    <body>
        <nav class="one">
            <div style="text-align: right; background: #93815E;">
                <a href="/newsPortalV26/newsPortalChaina/"><img src="view/chflag.png" alt="Flag Image" width="50" height="50"></a>
            </div>
            <ul class="topmenu">
                <li><a href="#">categories<i class="fa fa-angle-down"></i></a>
                    <ul class="submenu">
                        <?php 
                            Controller::AllCategory();
                        ?>
                    </ul>
                </li>
                <li><a href="testError">Info</a></li>
                <li><a href="./">start page</a></li>
            </ul>
            <div class="navbar">
                <img src="view/korner.png" width="100%" height="140" alt="Menu Image">
            </div>
        </nav>

        <section class="about-section">
            <div class="container">
                <h1>About Us</h1>
                <p>Welcome to our beauty salon! We are dedicated to providing high-quality beauty services...</p>
                <p>Our team of experienced professionals is passionate about making you look and feel your best...</p>
                <p>Whether you're looking for a haircut, a manicure, or a relaxing massage, we've got you covered...</p>
                <p>Visit us today and experience the difference!</p>
            </div>
        </section>

        <div class="contact-info">
            <p>Address: 116 Hung Vuong, Thanh Ha, Hoi An, Vietnam</p>
            <p>Phone: <a href="tel:+842353939333">+842353939333</a></p>
            <p>Hotline: <a href="tel:+84386272471">+ 84 386 272 471</a></p>
            <p>Email: <a href="mailto:info@hoiandelicacyhotel.com">info@hoiandelicacyhotel.com</a></p>
            <p>Copyright © 2022. Hoi An Delicacy Hotel & Spa. All rights reserved.</p>
            <p>Website proudly made by</p>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2032.042256291174!2d28.162532177360365!3d59.382322006777606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4694499a63b0b6e1%3A0x963e7adab71544a!2sSalon%20Pro!5e0!3m2!1set!2see!4v1715845200537!5m2!1set!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
