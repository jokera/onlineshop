<!DOCTYPE html>
<html lang="en">
    <head>
        <script>
        function conf(id){   
           if(window.confirm("Do you realy want to delete product with id ="+id)){
             location.href="members_area?del=" + id;
           }    
        }
        </script>
        <meta charset='utf-8'>
        <title>Welcome</title>
        <link rel='stylesheet' href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" charset='utf-8'>
    </head>
    <body>
<?php
echo anchor('login/logout', 'Log out');
?>
<h2>Wellcome to our catalog</h2>
<div><form method="GET">
        <table class ='insert_product'>
            <tr><td>Product name</td><td><input type ="text" name ="product_name"/></td></tr>
            <tr><td>Description</td><td><input type ="text" name ="description"/></td></tr>
            <tr><td>Price</td><td><input type ="text" name ="price"/></td></tr>
            <tr><td>Catalog id</td><td><input type ="text" name ="catalog_id"/></td></tr>
            <tr><td></td><td><div>
                        <input type ="submit" value ="Add">
                    </div>
                </td></tr>
        </table>  
    </form><br>
</div>
<br/><table class ='products'><thead><th>Name</th><th>Description</th><th>Price</th><th>Catalog id</th></thead>
            <?php
            $connection = mysqli_connect('localhost', 'gatakka', 'qwerty', 'market');
            if (!$connection) {
                echo 'Error establishing a Database connection';
                exit;
            }
            $sql = 'SELECT * FROM products';
            $row = mysqli_query($connection, $sql);
            while ($r = $row->fetch_assoc()) {
                ?>
<tr onclick= "conf(   <?= $r['catalog_id']; ?>   );"><td>
                <?php
                echo $r['product_name'] . '</td>
                  <td>' . $r['description'] . '</td>
                  <td>' . $r['price'] . '</td>
                  <td>' . $r['catalog_id'] . '</td></tr>';
            }
            error_reporting(E_NOTICE ^ E_ALL);
            if ($_GET['product_name']) {
                $sql = 'INSERT INTO products(product_name,description,price,catalog_id) 
                        VALUES("' . trim($_GET['product_name']) . '",
                               "' . trim($_GET['description']) . '",
                               "' . trim($_GET['price']) . '",
                               "' . trim($_GET['catalog_id']) . '")';

                var_dump($sql);

                mysqli_query($connection, $sql);
                echo mysqli_error($connection);
                header('Location: members_area');
                exit;
            }
            if ($_GET['del']) {
                $sql = "DELETE FROM `products` WHERE `catalog_id` =" . mysqli_escape_string($connection, $_GET['del']);
                var_dump($sql);
                echo mysqli_error($connection);

                $query = mysqli_query($connection, $sql);
                header('Location: members_area');
                exit();
            }
            ?>
</table>

