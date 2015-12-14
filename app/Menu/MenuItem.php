<?php
namespace MenuWithAuthentication\Menu;
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 17:45
 */
class MenuItem
{
    protected $title;

    public function _construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null)
    {
        if($title==null) {
            return $this->title;
        }


        $this->title = $title;
        return $this;


    }

    /**
     * @param null $icon
     * @return $this|MenuItem
     */
    public function icon($icon=null)
    {
        if($icon==null) {
            return $this->icon();
        }


        $this->icon = $icon;
        return $this;

    }

    /**
     * @param null $permission
     * @return $this|MenuItem
     */
    public function permission($permission=null)
    {
        if($permission==null) {
            return $this->permission();
        }


        $this->permission = $permission;
        return $this;
    }

    /**
     * @param null $role
     * @return $this|MenuItem
     */
    public function role($role=null)
    {
        if($role==null) {
            return $this->role();
        }


        $this->role = $role;
        return $this;
    }

    /**
     * @param null $user
     * @return $this|MenuItem
     */
    public function user($user=null)
    {
        if($user==null) {
            return $this->user();
        }


        $this->user = $user;
        return $this;
    }

    /**
     * @param null $url
     * @return $this|MenuItem
     */
    public function url($url=null)
    {
        if($url==null) {
            return $this->url();
        }


        $this->url = $url;
        return $this;
    }

    function __toString()
    {
        return $this->render();
    }

    private function render()
    {
        $data=array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['title'] = $this->title;
        $data['id'] = $this->id;
        return stringValue(view("menu.menuItem",$data));
    }


}