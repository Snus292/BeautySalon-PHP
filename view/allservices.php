<style type="text/css">
    /* Для компьютера */
    @media screen and (min-width: 768px) {
        .services-horizontal {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .services-horizontal li {
            margin-right: 230px; 
        }
        
    }
</style>

<?php ob_start(); ?>
<h1>all services</h1>
<br>

<div class="services-horizontal">
    <?php ViewServices::AllServices($arr); ?>
</div>

<?php 
$content = ob_get_clean();
include_once 'view/layout.php';
?>
