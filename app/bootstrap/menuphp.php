<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 14/12/15
 * Time: 16:29
 */
//Utilitxem MenuWithauthentication com a namespace per a que no cee conflictes.
//Home
MenuWithAuthentication::menu()
    ->title("Home")
    ->icon('fa-dashboard')
    ->url('home')
    ->rol('home')
    ->permission('home');

//Other Link
MenuWithAuthentication::menu()
    ->title("Another Link");

//Multilevel
MenuWithAuthentication::menu()
    ->title("Multilevel")->icon('fa-credit-card');
    MenuWithAuthentication::menu()
        ->title("Link in Level 1")
        ->icon('fa-briefcase');
    MenuWithAuthentication::menu()
        ->title("Link in level 2")
        ->icon('fa-user');

MenuWithAuthentication::menu()
    ->title("Últim menú")
    ->icon('fa-dashboard')
    ->url('http://www.google.com');
