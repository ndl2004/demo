<?php
require("lib/coreFunction.php");
$f=new CoreFunction();
define("PATH","http://localhost/nguyendinhloi12/index.php?");
require("partial/header.php");
?>
			
				
		<div class="row content">
			|<?php
			if(!isset($_GET['page']))
			{
				$page=" ";
			}
			else
			{
				$page=$_GET['page'];
			}
			$route=[
				''=>'pages/home.php',
				'home'=>'pages/home.php',
				'product'=>'product/product.php',
				'cart'=>'cart/cart.php',
				'contact'=>'user/contact.php',
				'registration'=>'user/registration.php',
				'detail'=>'product/detail.php'
			];
			foreach($route as $key=>$value)
			{
				if($page == $key )
				{
					require($value);
				}
			}
			?>
		</div>	
<?php
	include_once("partial/footer.php");
?>