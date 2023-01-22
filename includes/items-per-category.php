<?php
session_start();

// query database for # of products in inventory
$prodSql = "SELECT SUM(`quantity`) FROM `inventory`";
$prodResult = mysqli_query($conn, $prodSql);
$row = $prodResult->fetch_array();
$prodInInventory = $row[0];

// query database for total value of products in inventory
$valueSql = "SELECT SUM(`price`) FROM `inventory`";
$valueResult = mysqli_query($conn, $valueSql);
$row = $valueResult->fetch_array();
$valueInInventory = $row[0];


// query database for jewelry count
 $jewelrySql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Necklaces' OR category='Earrings' OR category='Bracelets' OR category='Keychains'";
 $jewelryResult= mysqli_query($conn, $jewelrySql);

 if (mysqli_num_rows($jewelryResult) > 0) {
   while($row = mysqli_fetch_assoc($jewelryResult)) {
     $jewelryCount = $row["COUNT(`category`)"];
   } 
   } else {
     $jewelryCount = 0;
 }

 // query database for llama count
 $llamaSql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Llamas' OR category='Llama-Ramas' OR category='Llama Accessories'";
 $llamaResult= mysqli_query($conn, $llamaSql);

 if (mysqli_num_rows($llamaResult) > 0) {
   while($row = mysqli_fetch_assoc($llamaResult)) {
     $llamaCount = $row["COUNT(`category`)"];
   } 
   } else {
     $llamaCount = 0;
 }

 //query database for art count
 $artSql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Sculptures' OR category='Paintings/Prints' OR category='Coloring Pages'";
 $artResult= mysqli_query($conn, $artSql);

 if (mysqli_num_rows($artResult) > 0) {
   while($row = mysqli_fetch_assoc($artResult)) {
     $artCount = $row["COUNT(`category`)"];
   } 
   } else {
     $artCount = 0;
 }

 // query database for rocks count
 $rocksSql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Rocks' OR category='Bismuth Crystals'";
 $rocksResult= mysqli_query($conn, $rocksSql);

 if (mysqli_num_rows($rocksResult) > 0) {
   while($row = mysqli_fetch_assoc($rocksResult)) {
     $rocksCount = $row["COUNT(`category`)"];
   } 
   } else {
     $rocksCount = 0;
 }

 //query database for wardrobe count
 $wardrobeSql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Clothes/Merch' OR category='Bags/Purses' OR category='Drawstring Bags'";
 $wardrobeResult= mysqli_query($conn, $wardrobeSql);

 if (mysqli_num_rows($wardrobeResult) > 0) {
   while($row = mysqli_fetch_assoc($wardrobeResult)) {
     $wardrobeCount = $row["COUNT(`category`)"];
   } 
   } else {
     $wardrobeCount = 0;
 }

 //query database for custom count
 $customSql = "SELECT COUNT(`category`) FROM `inventory` WHERE category='Custom Order'";
 $customResult= mysqli_query($conn, $customSql);

 if (mysqli_num_rows($customResult) > 0) {
   while($row = mysqli_fetch_assoc($customResult)) {
     $customCount = $row["COUNT(`category`)"];
   } 
   } else {
     $customCount = 0;
 }


 mysqli_close($conn);