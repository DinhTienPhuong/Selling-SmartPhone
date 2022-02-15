
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greeny Template - free website template</title>
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
    
        <h1>Subject Management</h1>
        <a href="?action=insertProductForm" >Insert new product</a><br/><br/>
        <table border="1" width="100%" class="table table-bordered text-center">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Code</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            $result = Product::getList();// goi phuong thuc lay danh sach
            while($set = $result->fetch()){ // duyet danh sach
                echo "<tr>";
                echo "<td>".$set['proid']."</td>";
                echo "<td><img src=".$set['proimage']."></td>";
                echo "<td>".$set['proname']."</td>";
                echo "<td>".$set['procode']."</td>";
                echo "<td><a href='?id=".$set['proid']."&action=updateProductForm'>Update</a></td>";
                echo "<td><a href='?id=".$set['proid']."&action=deleteProductForm'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    

    </div> <!-- end of content -->
</body>
</html>