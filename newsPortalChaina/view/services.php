<?php
class ViewServices
{

    public static function ServicesByCategory($arr)
    {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2>" . $value['chtitle'] . "</h2>";
            echo "<p>价格: $" . $value['price'] . "</p>"; // Отображение цены
            Controller::commentsCount($value['id']);
            echo "<a href='services?id=" . $value['id'] . "'>下一个</a><br>";
        }
    }

    public static function allServices($arr)
    {
        foreach ($arr as $value) {
            echo "<li>" . $value['chtitle'];
            echo "<p>价格: $" . $value['price'] . "</p>"; // Отображение цены
            Controller::commentsCount($value['id']);
            echo "<a href='services?id=" . $value['id'] . "'>下一个</a></li><br>";
        }
    }

    public static function readServices($n)
    {
        echo "<h2>" . $n['chtitle'] . "</h2>";
        echo "<p>价格: $" . $n['price'] . "</p>"; // Отображение цены
        Controller::commentsCountWithAnchor($n['id']);
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150/><br>';
        echo "<p>" . $n['chtext'] . "</p>";
    }

}
