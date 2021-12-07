<?php

class AboutUsController extends Controller
{
    public function defaultAction(){

        $template = new Template('default');

        $variable['title']  = 'About Us Page Title';
        $variable['content']  = 'About Us Page content';

        $template->view('static-page', $variable);
    }
}
