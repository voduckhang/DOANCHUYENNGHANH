<?php

include './Layout/sql-controller.php';
if(isset($_POST['add_to_cart'])){
    if($_SESSION['cart']){

    }
    else{
        $session_array=array(
            'id'=>$_GET['id'],
            "name"=>$_POST['name'],
            "price"=>$_POST['price'],
            "quanlity"=>$_POST['quanlity']
        );
        $_SESSION['cart'][]=$session_array;
    }
}

// if (isset($_POST["submit"])) {
//     if (isset($_SESSION["cart"])) {
//         $item_array_id = array_column($_SESSION["cart"], "product_id");
//         if (!in_array($_GET["id"], $item_array_id)) {
//             $count = count($_SESSION["cart"]);
//             $item_array = array(
//                 'product_id' => $_GET["id"],
//                 'item_name' => $_POST["hiddent_name"],
//                 'product_price' => $_POST["hiddent_price"],
//                 'item_quantily' => $_POST["quantity"],
//             );
//             $_SESSION["cart"][$count] = $item_array;
//             echo '<script>window.location="product.php"</script>';
//         } else {
//             echo '<script>alert("Đã thêm sản phẩm vào trong giỏ hàng")</script>';
//             echo '<script>window.location="product.php"</script>';
//         }
//     } else {
//         $item_array = array(
//             'product_id' => $_GET["id"],
//             'item_name' => $_POST["hiddent_name"],
//             'product_price' => $_POST["hiddent_price"],
//             'item_quantily' => $_POST["quantity"],
//         );
//         $_SESSION["cart"][0] = $item_array;
//     }
// }
// if(isset($_GET["action"])){
//     if($_GET["action"]=="delete"){
//         foreach($_SESSION["cart"] as $keys =>$value){
//             if($value["product_id"]==$_GET["id"]){
//                 unset($_SESSION["cart"][$keys]);
//                 echo '<script>alert("Đã xóa sản phẩm trong giỏ hàng")</script>';
//                 echo '<script>window.location="product.php"</script>';
//             }
//         }
//     }
// }
?>