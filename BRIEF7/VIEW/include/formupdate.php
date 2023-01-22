 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <i type="button" class="btn-close fa-sharp fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php url('gestion/store')?>" enctype = "multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="recipient-name">
          </div>
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image:</label>
            <input type="file" name="image" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text"  class="col-form-label">Price:</label>
            <input class="form-control" type="number" name="price" id="message-text"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Quantity:</label>
            <input class="form-control" type="number" name="quantity" id="message-text"></input>
          </div>
      
      
      <div class="modal-footer">
   
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
