<html>
    <head>
        <title>Edit Product</title>
    </head>
    <body>
    
    <?php //echo validation_errors();?>

        <h2>Edit Your Product Here</h2>
        <form method="post" action="" enctype="multipart/form-data">
           Product Name:<input type="text" name="pname" value="<?php echo set_value('pname');?>"><br>
           Product Description:<input type="text" name="pdescription" value="<?php echo set_value('pdescription');?>"><br>
           Product Image:<input type="file" name="userfile" value="<?php echo set_value('pimage');?>"><br> 
           Product Price:<input type="text" name="pprice" value="<?php echo set_value('pprice');?>"><br>
           Product Quantity:<input type="text" name="pquantity" value="<?php echo set_value('pquantity');?>"><br>
           Shipping Details:<input type="text" name="pdetails" value="<?php echo set_value('pdetails');?>"><br>
           rating:<input type="text" name="prating" value="<?php echo set_value('prating');?>"><br>
           publish <input type="checkbox" name="publish" value="1"><br>
           feature <input type="checkbox" name="feature" value="1"><br>
             <label>Category</label>
                <select name="cat_title">
               <?php foreach ($allcategory as $c):?>
               <option value="<?php echo $c['cat_id'];?>"><?php echo $c['cat_title'] ;?></option>;
               <?php endforeach;?>
                 </select><br/>
                <input type="submit" name="submit" value="Edit">
        </form>
        
    </body>
</html>