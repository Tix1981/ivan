<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
class IvanController extends BaseController {
    public function action_index() {
        $view = View::make('ivan.index', array('name'=>'Ivan Kostadinovic'))
            ->with('age','33');
        $view->location = 'Novi Sad';
        $view['speciality'] = 'bass guitar';
        return $view;
    }
}

//proba za git