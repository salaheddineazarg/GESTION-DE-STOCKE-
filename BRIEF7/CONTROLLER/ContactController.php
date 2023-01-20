<?php
class ContactusController {
   public function index() 
  
   {  
    $data['title']="contactus page";

      View::load('contactus',$data);
      
   }
  }
  ?>