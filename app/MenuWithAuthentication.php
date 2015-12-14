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
    public function _constant()
    {

    }

    public static function menu($id)
    {

        return new MenuItem($id);
    }
}