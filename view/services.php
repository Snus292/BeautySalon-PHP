<?php
class ViewServices
{

    public static function ServicesByCategory($arr)
    {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2>" . $value['title'] . "</h2>";
            echo "<p>Price: $" . $value['price'] . "</p>"; 
            Controller::commentsCount($value['id']);
            echo "<a href='services?id=" . $value['id'] . "'>Next</a><br>";
        }
    }

    public static function allServices($arr)
    {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<li>" . $value['title'];
            echo "<p>Price: $" . $value['price'] . "</p>"; 
            Controller::commentsCount($value['id']);
            echo "<a href='services?id=" . $value['id'] . "'>Next</a></li><br>";
        }
    }

    public static function readServices($n)
    {
        echo "<h2>" . $n['title'] . "</h2>";
        echo "<p>Price: $" . $n['price'] . "</p>"; 
        Controller::commentsCountWithAnchor($n['id']);
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150/><br>';
        echo "<p>" . $n['text'] . "</p>";
    }
}
