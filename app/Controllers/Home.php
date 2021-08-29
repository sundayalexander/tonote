<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $urls = ['form_url' =>  'signup', 'privacy_url' => 'privacy', 'terms_url' => 'terms'];
    /**
     * Index view
     */
    public function index()
    {
        $this->view('home', $this->urls);
    }

    /**
     * Signup view
     * @return string
     */
    public function signup(){
        return view('signup');
    }

    /**
     * Privacy view
     */
    public function privacy(){
        $data = $this->urls;
        $data['title'] = 'Privacy Policy';
        $this->view('privacy', $data);
    }

    /**
     * Terms and Conditions view
     */
    public function terms(){
        $data = $this->urls;
        $data['title'] = 'Terms & Conditions';
        $this->view('terms', $data);
    }


    public function contact(){

        // an email address that will be in the From field of the email.
        $from = 'Demo contact form <demo@domain.com>';

        // an email address that will receive the email with the output of the form
        $sendTo = 'Demo contact form <yourEmail@example.com>';

        // subject of the email
        $subject = 'New message from contact form';

        // form field names and their translations.
        // array variable name => Text to appear in the email
        $fields = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'message' => 'Message');

        // message that will be displayed when everything is OK :)
        $okMessage = 'Thank You! your message has been sent.';

        // If something goes wrong, we will display this message.
        $errorMessage = 'There was an error while submitting the form. Please try again later';

        /*
         *  LET'S DO THE SENDING
         */

        // if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
        error_reporting(E_ALL & ~E_NOTICE);

        try {

            if (count($_POST) == 0) throw new \Exception('Form is empty');

            $emailText = "You have a new message from your contact form\n";

            foreach ($_POST as $key => $value) {
                // If the field exists in the $fields array, include it in the email
                if (isset($fields[$key])) {
                    $emailText .= "$fields[$key]: $value\n";
                }
            }

            // All the necessary headers for the email.
            $headers = array('Content-Type: text/plain; charset="UTF-8";',
                'From: ' . $from,
                'Reply-To: ' . $from,
                'Return-Path: ' . $from,
            );

            // Send email
            mail($sendTo, $subject, $emailText, implode("\n", $headers));

            $responseArray = array('type' => 'success', 'message' => $okMessage);
        } catch (\Exception $e) {
            $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        }


        // if requested by AJAX request return JSON response
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
        } // else just display the message
        else {
            echo $responseArray['message'];
        }

    }
}
