<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 16:29
 */
//Utilitxem MenuWithauthentication com a namespace per a que no cee conflictes.
//Home
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('sergitur');
//Another link
MenuWithAuthentication::menu('anotlink')
    ->title('Another link')
    ->user(5);
;
//Multilevel
MenuWithAuthentication::menu('multi')
    ->title('Multilevel')
    ->icon('fa-credit-card');

MenuWithAuthentication::menu('link2')
    ->title('Link in level 2')
    ->icon('fa-briefcase');

MenuWithAuthentication::menu('link3')
    ->title('Link in level 2')
    ->icon('fa-user');

MenuWithAuthentication::menu('link4')
    ->title('Últim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.com');
