
  document.getElementById("formAdd").onsubmit = (e) =>{
   let nameAdd = document.getElementsByClassName("name");
    let priceAdd = document.getElementsByClassName("price");
     let quantityAdd = document.getElementsByClassName(" quantityAdd");
     let image = document.getElementsByClassName("image");
 
   


  for(var i = 0 ; i<nameAdd.length ;i++){
   
     
      if ( nameAdd[i].value== " " || priceAdd[i].value == "" || quantityAdd[i].value == "" || image[i].value == "" ){

        e.preventDefault();

        nameAdd[i].style.borderColor="red";
        priceAdd[i].style.borderColor="red";
        quantityAdd[i].style.borderColor="red";
        image[i].style.borderColor="red";
      
        alert("Please Check All The Inputs ")
         
      

       
      
      }
     
   
  }
}


 