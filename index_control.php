<?php
    include "connect.php";
    include "Product.php";
    if(isset($_GET["action"]))
        $action = $_GET["action"];
    else if(isset ($_POST["action"]))
        $action = $_POST["action"];
    else 
        $action = "productmanagement";

    switch ($action){
        case "productmanagement":
            include 'productManagement.php';
            break;
        case "insertProductForm":
        case "updateProductForm":
        case "deleteProductForm":
            include 'viewProduct.php';
            break;
        case "insertProduct":
            $name = $_POST["txtProductName"];
            $code = $_POST["txtProductCode"];
            $price = $_POST["txtProductPrice"];
            $image = $_POST["txtProductImage"];
            $pro = new Product('',$name, $code, $price,$image);
            $pro->insert();
            include 'productManagement.php';
            break;
        case "updateProduct":
            $id = $_POST["txtProductId"];
            $name = $_POST["txtProductName"];
            $code = $_POST["txtProductCode"];
            $price = $_POST["txtProductPrice"];
            $image = $_POST["txtProductImage"];
            $pro = new Product($id,$name, $code, $price,$image);
            $pro->update();
            include 'productManagement.php';
            break;
        case "deleteProduct":
            $id = $_POST["txtProductId"];
            $name = $_POST["txtProductName"];
            $code = $_POST["txtProductCode"];
            $price = $_POST["txtProductPrice"];
            $image = $_POST["txtProductImage"];            
            $pro = new Product($id,$name, $code, $price,$image);
            $pro->delete();
            include 'productManagement.php';
            break;       
    }
?>

