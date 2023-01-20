<?php
class GalleryController {
   public function index() 
  
   {  
    $db= new product();
    $data['products']=$db->getAllProducts();
   

      View::load('gallery',$data);
      
   }
  }
  ?>