<?php

class ContactController extends Controller
{   
    public function runBeforeAction(){

        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){

            $variables['title'] = 'You have already submited form.';
            $variables['content'] = 'Please wait for you replay.';
    
            $template = new Template('default');
            $template->view('static-page', $variables);

            return false;
        }
        return true;

    }

    public function defaultAction(){
        $variables['title'] = 'Contact Us Page';
        $variables['content'] = 'Welcome to contact us page.';

        $template = new Template('default');
        $template->view('contact/contact-us-page', $variables);
    }

    public function submitContactFormAction(){

        $_SESSION['has_submitted_the_form'] = 1;

        $variables['title'] = 'Thank you for you message.';
        $variables['content'] = 'We replay in 2-3 business days.';

        $template = new Template('default');
        $template->view('static-page', $variables);

    }
}


