<?php
include "BloodDetailsFly_w_Imp.php";
class BloodDetailsFactory extends Controller{
    private static $bloodDetailsImp;
    function __construct()
    {
        parent:: __construct();
    }

    public static function getBloodDetailsImp(): BloodDetailsFly_w_Imp
    {
        if (!self::$bloodDetailsImp){
            self::$bloodDetailsImp = new BloodDetailsFly_w_Imp();
        }
        return self::$bloodDetailsImp;
    }

}
