<?php 


class product extends database
{
   private $conn ;
   private $select;
   private $add;
   private $delete;
   private $getrow;
    
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

   }

   // -----------------------------------------------------------------------------------
   public function getAllProducts()
   {
      $this->conn = $this->connection();
   $this->select= mysqli_query($this->conn,'SELECT * FROM product ' );


    if($this->select){


    return mysqli_fetch_all($this->select,MYSQLI_ASSOC);
}
  
   }
   public function getMin(){
      $this->conn = $this->connection();
      $this->select= mysqli_query($this->conn,'SELECT MIN(price) FROM product ' );
    
      if($this->select){


         return (float)$this->select;
         
      } 



   }


// -----------------------------------------------------------------------------------------------------------

   public function insertproduct($name,$price,$quantity,$image)
   {
      $this->conn = $this->connection();
     
   
      
   $this->add = mysqli_query($this->conn,"INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `image`, `date_ajoute`) VALUES (NULL, '$name', '$price', '$quantity', '$image', NOW() )" );
   

      if($this->add){


         return $this->add;  
}
  
   }
   
   // ------------------------------------------------------------------------------------------------------------------
   public function deleteproduct($id)
   {
     
    
$this->conn = $this->connection();


$this->delete=mysqli_query($this->conn,"DELETE FROM `product` WHERE id=".$id."");

if($this->delete){


         return $this->delete;

}else{
   echo"<script>alert('YOUR PRODUCT IS DOESNT DELETED')</script>";
}


   }
   // -------------------------------------------------------------------------
    public function edit($id,$name,$image,$price){

      $this->conn = $this->connection();

         $this->update=mysqli_query($this->conn," UPDATE product SET name ='$name', price='$price' ,$quan, image='$image','date_ajoute'=NOW() WHERE id=$id ");

     if($this->update){


      return $this->update;
}

    }
   //  ----------------------------------------------
    public function editwithoutimage($id,$name,$price){

      $this->conn = $this->connection();

      
      
     
       
       $this->select = mysqli_query($this->conn," UPDATE product  SET name ='$name', prix =$price WHERE id=$id ");
   
    
    
     if($this->select){
      return $this->select;
}

    }
   //  -------------------------------------------------------------------------------------------------
    public function getrow($id)
    {
      $this->conn = $this->connection();
        
      $this->getrow=mysqli_query($this->conn,"SELECT* FROM `product` WHERE id= $id");
     
         return mysqli_fetch_array($this->getrow);
        

     
   
    }
   

}




?>