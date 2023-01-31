// inventory search functionality
function searchFunctionSKU() {
  let input = document.getElementById("searchInventoryInputSKU");
  let filter = input.value.toUpperCase();
  let table = document.getElementById("inventory-table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    console.log(td);
    if (td) {
      txtValue = td.textContent || td.innerTest;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchFunctionName() {
  let input = document.getElementById("searchInventoryInputName");
  let filter = input.value.toUpperCase();
  let table = document.getElementById("inventory-table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    console.log(td);
    if (td) {
      txtValue = td.textContent || td.innerTest;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchFunctionCategory() {
  let input = document.getElementById("searchInventoryInputCategory");
  let filter = input.value.toUpperCase();
  let table = document.getElementById("inventory-table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    console.log(td);
    if (td) {
      txtValue = td.textContent || td.innerTest;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
// end inventory search functionality

// Display and hide inventory window popup
function toggleDisplayProduct(id) {
  let card = document.getElementById(id);

  if (card.style.display != "none") {
    card.style.display = "none";
  } else {
    card.style.display = "flex";
    //call view, edit, or delete AJAX requests
    if (id === "view-card") {
      viewItemAjax();
    } else if (id === "edit-card") {
      //editItemAjax();
    } else if (id === "delete-card") {
      //deleteItemAjax();
    }
  }
}

function viewItemAjax() {
  //get the SKU from the document
  let skuToView = document.getElementById("sku-to-get").value;
  
  //AJAX Request to retrieve the data
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "includes/viewinventory.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
  
  xhr.onreadystatechange = function () {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      //Process the request
      let data = JSON.parse(this.responseText);
      //Set the HTML based on item data
      processItemData(data);
    }
  }

  //send the request to the database
  xhr.send('sku=' + skuToView);
}

function processItemData(data) {
  let jsonData = data;

  //Get specific DOM element
  let name = document.getElementById("view-item-name");
  let description = document.getElementById("view-item-description");
  let price = document.getElementById("view-item-price");
  let quantity = document.getElementById("view-item-qty");
  let weight = document.getElementById("view-item-weight");
  let category = document.getElementById("view-item-category");

  //Assign JSON text to DOM element
  name.innerText = jsonData["name"];
  description.innerText = jsonData["description"];
  price.innerText = jsonData["price"];
  quantity.innerText = jsonData["quantity"];
  weight.innerText = jsonData["weight"];
  category.innerText = jsonData["category"];
}