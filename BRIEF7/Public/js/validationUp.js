document.getElementById("formUpdate").onsubmit = (e) =>{
    let nameUpdate = document.getElementById("name");
     let priceUpdate = document.getElementById("price");
      let quantityUpdate = document.getElementById("quantityUpdate");
      let imageUpdate = document.getElementById("image");


  
      

         
       if ( nameUpdate.value== "" || priceUpdate.value == "" || quantityUpdate.value == ""  ){
 


         e.preventDefault();
         nameUpdate.style.borderColor="red";
         priceUpdate.style.borderColor="red";
         quantityUpdate.style.borderColor="red";
         imageUpdate.style.borderColor="red";
       
         alert("Please Check All The Inputs ")
          
       
 
        
       
       } 
       

  }
  
  
 
