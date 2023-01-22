<?php include 'header.php'; ?>

<div class="container-inventory">
  <div class="container4">
    <div>
      <label for="searchInventoryInputSKU">Search for item by SKU:</label>
      <input type="text" id="searchInventoryInputSKU" onkeyup="searchFunctionSKU()" placeholder="Enter a SKU..">
    </div>
    <div>
      <label for="searchInventoryInputName">Search for items by Name:</label>
      <input type="text" id="searchInventoryInputName" onkeyup="searchFunctionName()" placeholder="Enter a Name..">
    </div>
    <div>
      <label for="searchInventoryInputCategory">Search for items by Category:</label>
      <input type="text" id="searchInventoryInputCategory" onkeyup="searchFunctionCategory()" placeholder="Enter a  Category..">
    </div>
  </div>
  <div class="container3">
    <div>
      <table class="inventory-table" id="inventory-table">
        <thead>
          <th>SKU</th>
          <th>Item Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Weight</th>
          <th>Crafter</th>
          <th>Date Created</th>
        </thead>
        <tbody>
          <?php
          $select = "SELECT * FROM inventory;";
          $result = mysqli_query($conn, $select);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>{$row['sku']}</td>
                <td>{$row['name']}</td>
                <td>{$row['category']}</td>
                <td>{$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['weight']}</td>
                <td>{$row['crafter']}</td>
                <td>{$row['date_created']}</td>
              </tr>";
            }
          }

          mysqli_close($conn);
          ?>



        </tbody>
      </table>
    </div>

  </div>
</div>


<?php include 'footer.php'; ?>