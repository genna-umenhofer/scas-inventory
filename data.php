<?php include 'header.php'; ?>

<?php

include 'includes/items-per-category.php';
?>
<div class="container-data">
  <div>
  </div>
  <div class="graph-box margin">
    <div class="flex-row">
      <div class="purple-border padding">
        <h2 class="center">Number of Products in Inventory:</h2>
        <h3 class="center"><?php echo $prodInInventory; ?> Products</h3>
      </div>
      <div class="purple-border padding">
        <h2 class="center">Value of Products in Inventory:</h2>
        <h3 class="center">$<?php echo $valueInInventory; ?></h3>
      </div>
    <!--
      <div class="purple-border padding">
        <h2 class="center">Revenue This Year:</h2>
        <h3 class="center">$3400.98</h3>
      </div>
      <div class="purple-border padding">
        <h2 class="center">Total Expidenture:</h2>
        <h3 class="center">$2,418.90</h3>
      </div>-->
    </div>
    <div class="margin">
      <h2>Items Per Category</h2>
      <canvas id="itemsPerCategory"></canvas>
    </div><!--
    <div class="margin">
      <h2>Items Per Artist</h2>
      <canvas id="itemsPerArtist"></canvas>
    </div>
    <div class="margin">
      <h2>Sales Trends</h2>
      <canvas id="itemTrends"></canvas>
    </div>-->
  </div>


</div>


<script>
  let jewelryCount = <?php echo json_encode($jewelryCount); ?>;
  let llamaCount = <?php echo json_encode($llamaCount); ?>;
  let artCount = <?php echo json_encode($artCount); ?>;
  let rocksCount = <?php echo json_encode($rocksCount); ?>;
  let wardrobeCount = <?php echo json_encode($wardrobeCount); ?>;
  let customCount = <?php echo json_encode($customCount); ?>;

  var xValues = ["Jewelry", "Lucky Llamas", "Art", "Rocks", "Wardrobe", "Custom Items"];
  var yValues = [jewelryCount, llamaCount, artCount, rocksCount, wardrobeCount, customCount];
  var barColors = ["rgb(159, 18, 42)", "rgb(154, 18, 66)", "rgb(142, 31, 87)", "rgb(126, 44, 103)", "rgb(105, 55, 113)", "rgb(83, 63, 117)", "rgb(63, 69, 115)", "rgb(47, 72, 109)", "rgb(40, 73, 99)", "rgb(42, 72, 88)"];

  new Chart("itemsPerCategory", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {
        display: true
      },
      title: {
        display: false
      }
    }
  });

  var xValues = ["Stephie", "Skye", "Unknown", "Guest"];
  var yValues = [130, 28, 14, 27];
  var barColors = ["rgb(105, 55, 113)", "rgb(83, 63, 117)", "rgb(63, 69, 115)", "rgb(47, 72, 109)", "rgb(40, 73, 99)", "rgb(42, 72, 88)"];

  new Chart("itemsPerArtist", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      legend: {
        display: false
      },
      title: {
        display: false,
      }
    }
  });

  var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

  new Chart("itemTrends", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{
        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
        borderColor: "rgb(42, 72, 88)",
        fill: false
      }, {
        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
        borderColor: "rgb(83, 63, 117)",
        fill: false
      }, {
        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
        borderColor: "rgb(159, 18, 42)",
        fill: false
      }]
    },
    options: {
      legend: {
        display: false
      }
    }
  });
</script>


<?php include 'footer.php'; ?>