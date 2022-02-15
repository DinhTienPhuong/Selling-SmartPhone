<?php
    if(isset($_GET["action"])){
        if($_GET["action"]=="updateProductForm")
            $action = 1;
        elseif($_GET["action"]=="deleteProductForm")
            $action = 2;
        else 
            $action = 0;
    }else
        header("Location:controller.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
            if($action==1)
                echo "<title>Update Product</title>";
            else if($action ==2)
                echo "<title>Delete Product</title>";
            else
                echo "<title>Insert Product</title>";
    ?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_content_wrapper">
    <div id="templatemo_content">

        <?php 
            if($action==1)
                echo "<h2 class='display-1'>Update Product</h2>";
            else if($action ==2)
                echo "<h2 class='display-1'>Delete Product</h2>";
            else
                echo "<h2 class='display-1'>Insert Product</h2>";
        ?>
        <?php
            if(isset($_GET["id"])){
                $pro = Product::getProductById($_GET['id']);
            }
        ?>
        <form action="index_control.php" method="post" enctype="multipart/form-data">
            <?php
                if($action==1)
                    echo "<input type='hidden' name='action' value='updateProduct' />";
                else if($action ==2)
                    echo "<input type='hidden' name='action' value='deleteProduct' />";
                else
                    echo "<input type='hidden' name='action' value='insertProduct' />";
            ?>
            <table class="table table-bordered text-center">
                <tr>
                    <th>Product Id</th>
                    <td><input type="text" name="txtProductId" class="form-control"
                               <?php if(isset($pro)) echo "value=".$pro["proid"];?>
                               readonly="readonly"/>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="txtProductName" class="form-control"
                               <?php if(isset($pro)) echo "value='".$pro["proname"]."'";?>
                               <?php if($action==2) echo "readonly='readonly'";?>
                               /></td>
                </tr>
                <th>Code</th>
                    <td><input type="text" name="txtProductCode" class="form-control"
                               <?php if(isset($pro)) echo "value=".$pro["procode"];?>
                               <?php //if($action==2) echo "readonly='readonly'";?>
                               /></td>
                <tr>
                    <th>Price</th>
                    <td><input type="text" name="txtProductPrice" class="form-control"
                               <?php if(isset($pro)) echo "value=".$pro["proprice"];?>
                               <?php if($action==2) echo "readonly='readonly'";?>
                               /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input type="text" name="txtProductImage" class="form-control"
                               <?php if(isset($pro)) echo "value=".$pro["proimage"];
                                    
                               ?>
                               <?php if($action==2) echo "readonly='readonly'";?>
                               /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit"  class="btn btn-primary" value="submit"/>
                        <!-- <input type="submit" class="btn btn-primary" value="Delete"/> -->
                    </td>
                </tr>
            </table>
        </form>
    </div> 
</body>
</html>

