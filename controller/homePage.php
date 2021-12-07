<?php

class HomePageController extends Controller
{
    public function defaultAction(){

        $variables['title'] = 'Home Page Title';
        $variables['content'] = 'Welcome to our homepage';

        $template = new Template('default');
        $template->view('static-page', $variables);
    }
}