<?php include 'header.php'; ?>

<!--- http://localhost:8888/simply_complex/manage-inventory.php --->



<div class="container">
  <!-- Add New Inventory Item -->
  <div class="inventory-form">
    <form action="includes/addinventory.php" method="POST">
      <h2>Add New Inventory Item</h2>

      <label for="SKU">SKU:*</label>
      <input type="text" name="SKU" id="SKU" required>

      <label for="product-name">Product Name:*</label>
      <input type="text" name="product-name" id="product-name" required>

      <label for="product-description">Product Description:</label>
      <textarea name="product-description" id="product-description"></textarea>
      <div class="container2">
        <div>
          <label for="price">Price:</label>
          <input type="number" name="price" id="price" placeholder="$0.00" step=0.01>
        </div>
        <div>
          <label for="quantity">Quantity:</label>
          <input type="number" name="quantity" id="quantity" placeholder="0 each">
        </div>
        <div>
          <label for="weight">Weight:</label>
          <input type="number" name="weight" id="weight" placeholder="0.00 lbs" step=0.01>
        </div>
      </div>
      <div class="container2">
        <div>
          <label for="category">Category:</label>
          <select name="category" id="category">
            <option value="Necklaces">Necklaces</option>
            <option value="Earrings">Earrings</option>
            <option value="Bracelets">Bracelets</option>
            <option value="Keychains">Keychains</option>
            <option value="Llamas">Llamas</option>
            <option value="Llama-Ramas">Llama-Ramas</option>
            <option value="Llama Accessories">Llama Accessories</option>
            <option value="Rocks">Rocks</option>
            <option value="Sculptures">Sculptures</option>
            <option value="Clothes/Merch">Clothes/Merch</option>
            <option value="Bags/Purses">Bags/Purses</option>
            <option value="Bismuth Crystals">Bismuth Crystals</option>
            <option value="Drawstring Bags">Drawstring Bags</option>
            <option value="Paintings/Prints">Paintings/Prints</option>
            <option value="Coloring Pages">Coloring Pages</option>
            <option value="Custom Order">Custom Order</option>
          </select>
        </div>
        <div>
          <label for="artist">Artist:</label>
          <select name="artist" id="artist">
            <option value="Stephie">Stephie</option>
            <option value="Skye">Skye</option>
            <option value="Unknown">Unknown</option>
            <option value="Guest">Guest</option>
          </select>
        </div>
        <div>
          <label for="date">Date:</label>
          <input type="date" name="date-added">
        </div>
      </div>
      <!--
    <div>
      <label for="media">Upload Media: (Max 5 files, 100 Kb each)</label>
      <input type="file" name="media" accept=".jpg, .jpeg, .png">
    </div>-->
      <input type="submit" name="submit" class="button" value="Add Inventory Item">
    </form>
  </div>
  <!-- End Add Inventory -->

  <!-- View, Edit, Delete Inventory -->
  <div class="inventory-manage-fields">
    <!--<div class="inventory-form-mini">
      <div>
        <h2>View Item</h2>
        <label for="sku-to-view">SKU:</label>
        <input type="text" name="sku-to-view" id="sku-to-view">
        <button class="button" type="button" onclick="toggleDisplayProduct('view-card')">View Item</button>
      </div>
    </div>

    <div class="inventory-form-mini">
      <div>
        <h2>Edit Item</h2>
        <label for="sku-to-edit">SKU:</label>
        <input type="text" name="sku-to-edit" id="sku-to-edit">
        <button class="button" type="button" onclick="toggleDisplayProduct('edit-card')">Edit Item</button>
</div>
    </div> -->

    <div class="inventory-form-mini">
      <form>
        <h2>View, Edit, or Delete Item</h2>
        <label for="sku-to-get">SKU:</label>
        <input type="text" name="sku-to-get" id="sku-to-get">
        <div class="container2">
          <button class="button" type="button" onclick="toggleDisplayProduct('view-card')">View Item</button>
          <button class="button" type="button" onclick="toggleDisplayProduct('edit-card')">Edit Item</button>
          <button class="button" type="button" onclick="toggleDisplayProduct('delete-card')">Delete Item</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End View, Edit, Delete Inventory -->


  <!-- View Inventory Popup Modal-->
  <div class="modal-container" id="view-card" style="display: none;">
    <div class="inventory-card">
    <h2>View Inventory Item</h2>
      <div>
        <h3>Name: </h3>
        <p id="view-item-name">Lorem Ipsum</p>
        <h3>Description:</h3>
        <p id="view-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi odio molestias rem, magni ratione est dignissimos pariatur sint quae possimus nisi natus qui similique perferendis ab, quia distinctio corporis voluptatem!</p>
        <div class="container2 extra-gap container5">
          <div>
            <h3>Price:</h3>
            <p id="view-item-price">$0.00</p>
          </div>
          <div>
            <h3>Quantity:</h3>
            <p id="view-item-qty">15 each</p>
          </div>
          <div>
            <h3 >Weight:</h3>
            <p id="view-item-weight">1.20 lbs</p>
          </div>
          <div>
            <h3>Category:</h3>
            <p id="view-item-category">Necklaces</p>
          </div>
        </div><!--
        <div class="container2">
          <img src="" alt="photo1">
          <img src="" alt="photo2">
          <img src="" alt="photo3">
        </div>1-->
      </div>
      <button class="button" type="button" onclick="toggleDisplayProduct('view-card')">Close</button>
    </div>
  </div>
  <!-- End View Inventory Popup Modal-->

  <!-- Update Inventory Popup Modal -->
  <div class="modal-container" id="edit-card" style="display: none;">
    <div class="inventory-card">
      <form action="includes/editinventory.php" method="POST" class="">
        <h2>Update Inventory Item</h2>
        <label for="SKU">SKU:</label>
        <input type="text" id="SKU" required>
        <label for="product-name">Product Name:</label>
        <input type="text" id="product-name">
        <label for="product-description">Product Description:</label>
        <textarea name="product-description" id="product-description"></textarea>
        <div class="container2">
          <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" placeholder="$0.00">
          </div>
          <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" placeholder="0 each">
          </div>
          <div>
            <label for="weight">Weight:</label>
            <input type="number" name="" id="weight" placeholder="0.00 lbs">
          </div>
        </div>
        <div class="container2">
          <div>
            <label for="category">Category:</label>
            <select name="category" id="category">
              <option value="">Necklaces</option>
              <option value="">Earrings</option>
              <option value="">Bracelets</option>
              <option value="">Keychains</option>
              <option value="">Llamas</option>
              <option value="">Llama-Ramas</option>
              <option value="">Llama Accessories</option>
              <option value="">Rocks</option>
              <option value="">Sculptures</option>
              <option value="">Clothes/Merch</option>
              <option value="">Bags/Purses</option>
              <option value="">Bismuth Crystals</option>
              <option value="">Drawstring Bags</option>
              <option value="">Paintings/Prints</option>
              <option value="">Coloring Pages</option>
              <option value="">Custom Order</option>
            </select>
          </div>
          <div>
            <label for="crafter">Artist:</label>
            <select name="artist" id="artist">
              <option value="">Stephie</option>
              <option value="">Skye</option>
              <option value="">Unknown</option>
              <option value="">Guest</option>
            </select>
          </div>
          <div>
            <label for="date">Date:</label>
            <input type="date">
          </div>

        </div>
        <div class="container2">
            <!--<input type="submit" class="button" onclick="toggleDisplayProduct('delete-card')" value="Yes, Delete Item">-->
            <button type="submit" class="button" onclick="toggleDisplayProduct('edit-card')">Submit Edits</button>
            <button type="button" class="button" onclick="toggleDisplayProduct('edit-card')">Cancel Edits</button>
          </div>
        <!--<input type="submit" class="button" onclick="toggleDisplayProduct('edit-card')" value="Update Inventory Item">-->
      </form>
    </div>
  </div>
  <!-- End Update Inventory Popup Modal -->

  <!-- Delete item Popup Modal -->
  <div class="modal-container" id="delete-card" style="display: none;">
    <div class="inventory-card">
      <form action="includes/deleteinventory.php" method="POST" class="">
        <h2>Would you like to delete this item?</h2>
        <p>SKU:</p>
        <p>Product Name:</p>
        <P>Product Description:</p><!--
        <div class="container2">
          <img src="" alt="photo1">
          <img src="" alt="photo2">
          <img src="" alt="photo3">
        </div>-->
        <div class="container2">
          <!--<input type="submit" class="button" onclick="toggleDisplayProduct('delete-card')" value="Yes, Delete Item">-->
          <button type="submit" class="button" onclick="toggleDisplayProduct('delete-card')">Yes, Delete Item</button>
          <button type="button" class="button" onclick="toggleDisplayProduct('delete-card')">No, Keep Item</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End delete item popup modal -->
</div>
<?php include 'footer.php'; ?>