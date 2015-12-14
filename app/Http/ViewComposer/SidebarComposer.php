<?php
use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 17:13
 */
class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with('menu', $this->getSideBarMenu());
    }
        private function getSideBarMenu()
    {
        $menu =
            MenuWithAuthentication::instance()
            ->getMenu();

        return array($menu);
    }

}
