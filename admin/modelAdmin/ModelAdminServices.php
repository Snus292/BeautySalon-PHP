<?php
class ModelAdminServices
{
    public static function getNewsList()
    {
        $query = "SELECT services.*, category.name, users.username from services,
        category, users WHERE services.category_id=category.id AND
        services.user_id=users.id ORDER BY `services`.`id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
            public static function getNewsDetail($id)
    {
    
        $query = "SELECT services.*, category.name, users.username from services,
        category, users WHERE services.category_id=category.id AND
        services.user_id=users.id and services.id=".$id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $arr;
    }
    public static function getNewsEdit($id)
{
    $test = false;
    if (isset($_POST['save'])) {
        // Добавим блок else для корректной логики
        if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $idCategory = $_POST['idCategory'];

            // Images type blob
            $image = $_FILES['picture']['name'];
            if($image!=""){
                $image=addslashes(file_get_contents($_FILES['picture']['tmp_name']));
            }
            
            // Проверяем, был ли выбран файл изображения
            if($image=="") {
                // Если файл не выбран, обновляем запись без изображения
                $sql="UPDATE `services` SET `title` = '$title', `text` = '$text',
                `category_id` = '$idCategory' Where `services`.`id`=".$id;
            } else {
                // Если файл выбран, обновляем запись с изображением
                $sql="UPDATE `services` SET `title` = '$title', `text` = '$text', `picture`='$image',
                `category_id` = '$idCategory' Where `services`.`id`=".$id;
            }

            // Ваш код имеет лишнюю строку с запросом SQL
            // Либо обновление, либо вставка новой записи, но не оба сразу
            // $sql = "INSERT INTO `services` (`id`, `title`, `text`, `picture`, `category_id`, 
            // `user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1')";
            
            // Выполняем запрос SQL
            $db = new Database();
            $item = $db->executeRun($sql);
            if ($item == true) {
                $test = true;
            }
        } else {
            // Добавим обработку случая, если данные не были переданы правильно
            // Например, вы можете установить переменную $test в false и отобразить ошибку
            // или сделать другие действия в соответствии с вашими потребностями.
            // Например:
            // echo "Error: Data not provided correctly.";
        }
    }
    return $test;
}

    // Add
    public static function getNewsAdd()
    {
        $test = false;
        if (isset($_POST['save'])) {
            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) && isset($_POST['chtitle']) && isset($_POST['chtext']) && isset($_POST['price'])) {
    
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $chtitle = $_POST['chtitle'];
                $chtext = $_POST['chtext'];
                $price = $_POST['price'];
    
                if (isset($_FILES['picture'])) {
                    $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
                } else {
                    $image = '';
                }
    
                $sql = "INSERT INTO `services` (`id`, `title`, `text`, `picture`, `category_id`, `user_id`, `chtitle`, `chtext`, `price`) 
                        VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1', '$chtitle', '$chtext', '$price')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if ($item == true) {
                    $test = true;
                }
            }
        }
        return $test;
    }
    
public static function getNewsDelete($id)
{
    $test = false;
    if (isset($_POST['save'])) {
        $db = new Database();
        $sqlDeleteComments = "DELETE FROM comments WHERE `services_id` = ".$id;
        $deletedComments = $db->executeRun($sqlDeleteComments);

        $sqlDeleteService = "DELETE FROM services WHERE `id` = ".$id;
        $deletedService = $db->executeRun($sqlDeleteService);

        if ($deletedComments && $deletedService) {
            $test = true;
        }
    }
    return $test;
}

 } 
