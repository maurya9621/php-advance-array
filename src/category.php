<?php
$products = array(
    "Electronics" => array(
      "Television" => array(
        array("id" => "PR001","name" => "MAX-001","brand" => "Samsung"),
        array("id" => "PR002","name" => "BIG-301","brand" => "Bravia"),
        array("id" => "PR003","name" => "APL-02","brand" => "Apple")
      ),
      "Mobile" => array(
        array("id" => "PR004","name" => "GT-1980","brand" => "Samsung"),
        array("id" => "PR005","name" => "IG-5467","brand" => "Motorola"),
        array("id" => "PR006","name" => "IP-8930","brand" => "Apple")
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array("id" => "PR007","name" => "ER-001","brand" => "Chopard"),
        array("id" => "PR008","name" => "ER-002","brand" => "Mikimoto"),
        array("id" => "PR009","name" => "ER-003","brand" => "Bvlgari")
      ),
      "Necklaces" => array(
        array("id" => "PR010","name" => "NK-001","brand" => "Piaget"),
        array("id" => "PR011","name" => "NK-002","brand" => "Graff"),
        array("id" => "PR012","name" => "NK-003","brand" => "Tiffany" )  ) ) );
        // list of product table
      echo "<h1> product table </h1>";
       echo "<table border='5'>";
       echo "<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>";
       foreach($products as $category => $Category){
          
     foreach($Category as $subcategory => $Subcategory){
            foreach($Subcategory as $id => $Id ){
                echo "<tr>";
         echo "<td> $category </td>";
            echo "<td> $subcategory </td>"; 
         foreach($Id as $content => $Content){
         echo "<td> $Content </td>";  }
       echo "</tr>"; } } }
 echo "</table>";
 echo "<br>";
 //mobile subcategory
 echo "<h2> product table </h2>";
 echo "<table border='5'>";
  echo "<tr><th>category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>";
     foreach ($products as $key => $category) {
             foreach ($category as $Id => $subcategory) {
                 foreach($subcategory as $key2 => $value){
                     if ($Id=="Mobile")
                  echo "<tr><td> $key </td><td> $Id </td><td> $value[id] </td> 
                  <td> $value[name] </td> <td> $value[brand] </td> </tr> ";} } }
     echo "</table>";
     echo "<br>";
     // list all products
     echo "<h2> list all products</h2>";
     foreach ($products as $key => $category) {
      foreach ($category as $Id => $subcategory) {
          foreach($subcategory as $key2 => $value){
    echo"<p>product Id: $value[id]<br>name: $value[name]<br>subcategory: $Id<br>category: $key</p>"; } } }
    // Delete product with id = PR003.
    echo "<h3> Delete product with id = PR003</h3>";
    foreach ($products as $key => $category) {
      foreach ($category as $Id => $subcategory) {
          foreach($subcategory as $key2 => $value){
            if ($value["id"]=="PR003"){
              unset($value);
            echo"<p>product Id: $value[id]<br>name: $value[name]<br>subcategory: $Id<br>category: $key</p>";
              } } } }
            // Update product name = "BIG-555" with id = PR002.
            echo "<h3> Update product name = 'BIG-555' with id = PR002 </h3>";
            foreach ($products as $key => $category) {
              foreach ($category as $Id => $subcategory) {
                  foreach($subcategory as $key2 => $value){
                    if ($value["id"]=="PR002"){
                      $value["name"] = "BIG-555";
                    echo"<p>product Id: $value[id]<br>name: $value[name]<br>subcategory: $Id<br>category: $key</p>";
                      } } } }
      ?>