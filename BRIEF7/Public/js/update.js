

document.getElementById("addNew").addEventListener("click",()=>{

   
    var form  = document.createElement('div');
    form.innerHTML = `<div class="mb-3 inputDiv">
    <label for="recipient-name" class="col-form-label">Name:</label>
    <input type="text"  name="name[]" class="form-control name " id="recipient-name">
  </div>

  <div class="mb-3 inputDiv">
    <label for="recipient-name" class="col-form-label">Image:</label>
    <input type="file" name="image[]" id="image" class="form-control image" id="recipient-name">
  </div>
  <div class="mb-3 inputDiv">
    <label for="message-text" class="col-form-label">Price:</label>
    <input class="form-control price " type="number" name="price[]" id="message-text"></input>
  </div>
  <div class="mb-3 inputDiv">
    <label for="message-text" class="col-form-label">Quantity:</label>
    <input class="form-control  quantityAdd "  type="number" name="quantity[]" id="message-text"></input>
  </div>`
 

    document.getElementById("newDiv").append(form);
   


      
    


});



