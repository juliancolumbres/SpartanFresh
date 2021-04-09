<?php
$conn = mysqli_connect("sql3.freesqldatabase.com:3306", "sql3402886", "gn4yJmWUfg", "sql3402886");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
  <head>
    <title>Catalog View</title>
    <link rel="stylesheet" href="catagories.css">
  </head>

  <body>

    <div class ="menu">
      <div class = "wrapper">

        <ul>
          <li><a href="#">User Center</a></li>
          <li><a href="#">Log Out</a></li>
         <li><a href="#">Support</a></li>
        </ul>

        <form class ="search">
            <input type="text" name="search" placeholder="Search..">
        </form>
      </div>
    </div>



    <div class = "catagories">
     <div class = "wrapper">

        <ul>
          <?php
            // create SQL Query to display catagories
            $sql = "SELECT * FROM category";
            // execute the query
            $res = mysqli_query($conn, $sql);

              while ($row=mysqli_fetch_assoc($res))
              {
                $category = $row['category_name'];
                ?>
                  <li><a href="#"><?php echo $category?>s</a></li>
                  <?php
              }

           ?>

        </ul>
      </div>
    </div>


    <div class = "items">
      <div class = "wrapper">
          <ul>

            <?php
              // create SQL Query to items
              $sql = "SELECT * FROM category";
              $sql = "SELECT product_name, price, weight, stock FROM product";
              // execute the query
              $res = mysqli_query($conn, $sql);

                while ($row=mysqli_fetch_assoc($res))
                {
                  $name = $row['product_name'];
                  $price = $row['price'];
                  $weight = $row['weight'];
                  $stock = $row['stock'];
                  ?>
                  <li>
                      <img src="images/banana.jpeg">
                     <div class="description">
                       Price: $<?php echo $price?> &nbsp
                       Weight: <?php echo $weight?> lbs &nbsp
                       Stock:  <?php echo $stock?>
                       <div class="button">
                          <button onclick="#" type="button">Add</button>
                       </div>
                     </div>
                   </li>
                     <?php
                 }
             ?>



           <li>
               <img src="images/banana.jpeg">
              <div class="description">
                Price: $1.00 &nbsp
                Weight: 0.5 lbs &nbsp
                Stock: 100
                <div class="button">
                   <button onclick="#" type="button">Add</button>
                </div>
              </div>
            </li>

           <li>
               <img src="images/banana.jpeg">
              <div class="description">
                Price: $1.00 &nbsp
                Weight: 0.5 lbs &nbsp
                Stock: 100
                <div class="button">
                   <button onclick="#" type="button">Add</button>
                </div>
              </div>
            </li>

            <li>
              <img src="images/banana.jpeg">
              <div class="description">
                Price: $1.00 &nbsp
                Weight: 0.5 lbs &nbsp
                Stock: 100
                <div class="button">
                   <button onclick="#" type="button">Add</button>
                </div>
              </div>
            </li>

          <li>
              <img src="images/banana.jpeg">
              <div class="description">
                Price: $1.00 &nbsp
                Weight: 0.5 lbs &nbsp
                Stock: 100
                <div class="button">
                   <button onclick="#" type="button">Add</button>
                </div>
              </div>
            </li>


            <li>
               <img src="images/banana.jpeg">
              <div class="description">
                Price: $1.00 &nbsp
                Weight: 0.5 lbs &nbsp
                Stock: 100
                <div class="button">
                   <button onclick="#" type="button">Add</button>
                </div>
              </div>
            </li>

        </ul>
      </div>
    </div>
  </body>
</html>
