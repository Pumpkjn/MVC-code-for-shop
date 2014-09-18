
<div >
    
      <div style="float: right">
                 <?php
            // Check if user is logged in and
            // display appropriate account links
            $account_url = $app_path . 'account';
            $logout_url = $account_url . '?action=logout';
            if (isset($_SESSION['user'])) :
            ?>
                <li><a href="<?php echo $account_url; ?>">My Account</a></li>
                <li><a href="<?php echo $logout_url; ?>">Logout</a>
            <?php else: ?>
                    <a href="<?php echo $account_url; ?>"><img src="<?php echo $app_path ?>images/fb.png"</a>
            <?php endif; ?> 
                <br />
                  <a href="<?php echo $app_path . 'cart'; ?>">
             <img src="<?php echo $app_path ?>images/cart.png"  /><h2>Your Cart</h2>
            
            </a>
            </div>
    
      
     
    <ul id="menu">
        <li><a href="<?php echo $app_path; ?>">Home</a></li>  
        <li><a href="#">Event</a>
            <ul>
                <li><a href="http://skate.boo.vn/">Boo skateboarding day 2013</a></li>
                <li><a href="#">Vans go skateboarding day</a></li>
            </ul>
          </li>
        <li><a href="">Product</a>
        <ul>    
         <?php
            require_once('model/database.php');
            require_once('model/category_db.php');
            
            $categories = get_categories();
            foreach($categories as $category) :
                $name = $category['categoryName'];
                $id = $category['categoryID'];
                $url = $app_path . 'catalog?category_id=' . $id;
        ?>
        <li>
            
            
            <a href="<?php echo $url; ?>">
               <?php echo $name; ?>
            </a>
            
        </li>
       
        <?php endforeach; ?>
        </ul>
            </li>
            <li><a href="about_us.php">About Us</a></li>
            <li><img src="<?php echo $app_path; ?>images/fingers.jpg" /></li>
    </ul>
  
    

        
           
        

    
</div>