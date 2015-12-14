<?php
use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 17:13
 */

/**
 * Class SidebarComposer
 * @package MenuWithAuthentication\Http
 */
class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
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