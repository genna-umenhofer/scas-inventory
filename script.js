// log-in functionality


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
//document.getElementById("view-button").addEventListener("click", displayProduct);

function toggleDisplayProduct(id) {
  let card = document.getElementById(id);

  if (card.style.display != "none") {
    card.style.display = "none";
    console.log("I ran");
  } else {
    card.style.display = "flex";
    console.log("I ran, too!");
  }
  
}