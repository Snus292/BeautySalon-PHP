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
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Добавлен метатег для мобильной адаптации -->
        <style>
            .navbar {
            text-align: center;
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
        </style>
    </head>
    <body>
    <nav class="one">
    <div style="text-align: right; background: #93815E;">
    <a href="/newsPortalV26/"><img src="view/ukflag.png" alt="Flag Image"width="50" height="50"></a></div>
    <ul class="topmenu">
        <li><a href="#">类别<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">
                <?php 
                    Controller::AllCategory();
                ?>
            </ul>
        </li>
        <li><a href="testError">信息</a></li>
        <li><a href="./">斯塔迪莱特</a></li>
        <div style="text-align: right;">
    
    
</div>
    </ul>
    <div class="navbar">
        <img src="view/korner.png" width="100%" height="140" alt="Menu Image">
    </div>
</nav>

<section class="about-section">
        <div class="container">
            <h1>关于我们</h1>
            <p>欢迎来到我们的美容院！ 我们致力于提供高品质的美容服务...</p>
            <p>我们经验丰富的专业团队热衷于让您看起来和感觉最好......</p>
            <p>无论您是想要理发、美甲还是放松按摩，我们都能满足您的需求......</p>
            <p>今天就访问我们，体验不同之处！</p>
        </div>
    </section>
    <div class="contact-info">
    <p>地址： 116 Hung Vuong, Thanh Ha, 会安, 越南</p>

    <p>电话: <a href="tel:+842353939333">+842353939333</a> 
    <p> 热线: <a href="tel:+84386272471">+ 84 386 272 471</a> </p>
    <p> 电子邮件: <a href="mailto:info@hoiandelicacyhotel.com">info@hoiandelicacyhotel.com</a></p>

    <p>版权所有 © 2022。会安美食水疗酒店。 版权所有.</p>

    <p>网站自豪地制作</p>
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

