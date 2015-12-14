<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 18:20
 */
namespace MenuWithAuthentication;

use MenuWithAuthentication\Menu\MenuItem;
class MenuWithAuthentication
{
    protected static $instance = null;
    /*
     * @var MenuItem[]
     */
    protected $menu;
//    public function _construct()
//    {
//    }

    public static function menu($id)
    {

        return new MenuItem($id);
    }

    public static function instance()
    {
           if(is_null(static::$instance)){
               return static::$instance = new static;
           }
            return static::$instance;
    }

    public function getMenu()
    {
        return $this->menu->items();
    }
}