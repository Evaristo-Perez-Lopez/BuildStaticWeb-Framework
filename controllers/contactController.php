<?php
class Contact extends AppController
{
     public function __contruct(){
       parent::__contruct();
     }
     public function index(){
     }

     public function email()
     {
         if ($_POST) {
           if (!empty($_POST['email_address']) && !empty($_POST['full_name'])  ) 
           {
            //  to
            $to = $_POST['email_address'];
            // desde
            $headers = 'From: Website <' . SEND_ME . '>' . "\r\n";
            // Subject
            $subject = TITLE_MAIL;
            //  message
            $name = "Hola " . $_POST['full_name'];
            $message = ($_POST['text_message'] . " - " . $name);
            if(mail($to, $subject, $message, $headers)){
              $this->set("SENT_MAIL",true);
            }
            else {
              echo "<script>alert('Verifique que sus datos estén correctos');</script>";
              $this->set("SENT_MAIL",false);
            }
           }
         }
         unset($_POST);
         $this->redirect(array("controller"=>"contact", "action"=>""));
     }
}
