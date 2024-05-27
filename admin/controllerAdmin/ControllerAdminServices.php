<?php
class ControllerAdminServices
{
    // list News
    public static function servicesList()
    {
        $arr = ModelAdminServices::getNewsList();
        include_once 'viewAdmin/servicesList.php';
    }

    // add
    public static function servicesAddForm()
    {
        $arr = ModelAdminCategory::getCategoryList();
        include_once('viewAdmin/servicesAddForm.php');
    }

    public static function servicesAddResult()
    {
        $test = ModelAdminServices::getNewsAdd();
        include_once('viewAdmin/servicesAddForm.php');
    }

    // edit
    public static function servicesEditForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminServices::getNewsDetail($id);
        include_once('viewAdmin/servicesEditForm.php');
    }

    public static function servicesEditResult($id)
    {
        $test = ModelAdminServices::getNewsEdit($id);
        include_once('viewAdmin/servicesEditForm.php');
    }

    // delete
    public static function servicesDeleteForm($id)
    {
        $arr = ModelAdminCategory::getCategoryList();
        $detail = ModelAdminServices::getNewsDetail($id);
        include_once('viewAdmin/servicesDeleteForm.php');
    }

    public static function servicesDeleteResult($id)
    {
        $test = ModelAdminServices::getNewsDelete($id);
        include_once('viewAdmin/servicesDeleteForm.php');
    }
}  // class
