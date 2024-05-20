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



        <section>
            <div class='divBox'>
                <?php
                if(isset($content)){
                    echo $content;
                }
                else{
                    echo '<h1>Content is gone!</h1>';
                }
                ?>
            </div>
        </section>
        
        <hr>
        
        <p style="display:block; text-align:center;">SPTV21 2024 a. &copy;</p>
    </body>
    
</html>
