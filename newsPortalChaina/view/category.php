<?php

echo "<li class='submenuunit'><a href='all'>全部</a></li><br>";
foreach($arr as $value){
    echo "<li class='submenuunit'>
    <a href='category?id=".$value['id']."'>".$value['chname'].'</a></li><br>';

}

?>