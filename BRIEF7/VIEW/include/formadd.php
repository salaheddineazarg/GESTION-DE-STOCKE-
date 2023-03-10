<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <i type="button" class="btn-close fa-sharp fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
      </div>
      <div class="modal-body">
        <form  method="POST" id="formAdd" action="<?php url('gestion/store') ?>" enctype="multipart/form-data">
          <div id="newDiv">

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" name="name[]" class="form-control name " id="recipient-name">
            </div>

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Image:</label>
              <input type="file" name="image[]" class="form-control image" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Price:</label>
              <input class="form-control price " type="number" name="price[]" ></input>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Quantity:</label>
              <input class="form-control quantityAdd " type="number" name="quantity[]"></input>
            </div>
          </div>


          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="button" id="addNew" class="btn btn-primary">Add New</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
