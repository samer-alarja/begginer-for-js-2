   <?php 
    include 'config.php'; 
    if(isset($_GET['mo_year']) === true && $_GET['mo_year'] != ''){
             $val = $_GET['mo_year'];
             mysqli_query($link , 'DELETE  product
                                   FROM product 
                                   INNER JOIN category   
                                   WHERE product.mo_year = '.$val);
                header('location: panel.php?success=2');  
    }
    ?>
    
              
             