<!-- Modal: modalQuickView -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <form method="POST" action="add-products.php" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/default.png"
                    alt="First slide">
                </div>
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="h2-responsive product-name">
              <strong><i class="fa fa-plus"></i> Add Product Section</strong>
            </h2><hr>

         <!-- Uploading Product Image-->
              <div class="md-form">
               <div class="col-sm-4">
                <label for="productImage" style="color:black;">Product Image:</label>
                 </div>
                 <div class="col-sm-8">
                  <input type="file" id="p_image" name="p_image" class="form-control" placeholder="Product Image" class="file-loading" style="width:auto;" required="">
                   </div>
                  </div><br><br><br>
          <!-- /Uploading Product Image-->

            <div class="md-form">
               <div class="col-sm-4">
                <label for="productImage" style="color:black;">Product Name:</label>
                 </div>
                 <div class="col-sm-8">
                  <input type="text" id="p_name" name="p_name" class="form-control" placeholder="Product Name" class="file-loading" style="width:auto;" required="">
                   </div>
                  </div>
               <br><br><br>

            <div class="md-form">
               <div class="col-sm-4">
                <label for="productImage" style="color:black;">Product Price:</label>
                 </div>
                 <div class="col-sm-8">
                  <input type="text" id="p_price" name="p_price" class="form-control" placeholder="Product Price" class="file-loading" style="width:auto;" required="">
                   </div>
                  </div>
                  <br><br><br>

            <div class="md-form">
               <div class="col-sm-4">
                <label for="productImage" style="color:black;">Product Category:</label>
                 </div>
                 <div class="col-sm-8">
                  <select class="select-control" id="p_category" name="p_category" required="">
                      <option value="Select">Select Category</option>
                        <option value="Main">Main</option>
                        <option value="New Arrivals">New Arivals</option>
                        <option value="Deals of the Day">Deals of the Day</option>
                        <option value="Hot Deals">Hot Deals</option>
                        <option value="New Cars">New Cars</option>
                        <option value="Top Sales">Top Sells</option>
                  </select>
                   </div>
                  </div>
                  <br><br><br>

              <div class="md-form">
               <div class="col-sm-4">
                <label for="productImage" style="color:black;">Product Section:</label>
                 </div>
                 <div class="col-sm-8">
                  <select class="select-control" id="p_section" name="p_section" required="">
                      <option value="Select">Select Section</option>
                        <option value="Main">Main</option>
                        <option value="New Arrivals">New Arivals</option>
                        <option value="Deals of the Day">Deals of the Day</option>
                        <option value="Hot Deals">Hot Deals</option>
                        <option value="New Cars">New Cars</option>
                        <option value="Top Sales">Top Sells</option>
                  </select>
                   </div>
                  </div><br><br><br>
              
                   <div class="modal-footer">
                    <button type="submit" name="submit" id="submit" class="add-btn" data-loading-text="Loading..."><i class="glyphicon glyphicon-ok-sign"></i> ADD PRODUCT</button>

                    <button class="add-btn-close" data-dismiss="modal"><i class="glyphicon glyphicon-remove-sign"></i> CLOSE</button>
                   </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div> 
<!-- /PRODUCT MODAL -->