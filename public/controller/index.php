<?php
@session_start();
include_once('./../model/function.php');
 ?>
<?php
    include_once __DIR__ .'/../view/header.php';
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'all_products':
                include_once './../view/all_products.php';
                break;
            case 'cart':
                include_once './../view/cart.php';
                break;
            case 'contact':
                include_once './../view/contact.php';
                break;
            case 'search_products':
                include_once './../view/search_products.php';
                break;
            case 'user_logout':
                include_once './../view/user_logout.php';
            break;
            default:
            include_once('./../view/home.php');
            break;
    }    
}
else{
    include_once('./../view/home.php');
}
include_once('./../view/footer.php');
?>