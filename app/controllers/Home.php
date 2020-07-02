<?php

class Home extends Controller{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }


    public function indexAction (){
        $db = DB::getInstance();
        $fields = [
            'fname'=> 'Phan Pro',
            'lname' => 'nguyen Pro',
            'email' => 'phanvan92@gmail.com4324'
        ];

        $contactsQ = $db->update('contacts',1,$fields);
        $this->view->render('home/index');
    }
}
