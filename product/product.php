

<?php
$sql ="SELECT * FROM product ";
$result=$f->getAll($sql);
?>
<h1 style="text-align:center">All Products</h1>	
<?php
			   			
				foreach($result as $p)
				{
					?>
		
			
			    <div class="col-md-3">
				    <div class="card" style="width:500px margin:20px">
						<img class="card-img-top" src = "asset/images/<?= $p['image'] ?> " alt="Hình ảnh ">
						<div class="card-body">
						    <h5 class="card-title"><?= $p['name'] ?></h5>
							<div class = "d-flex justify-content-between mb-3">
								<div class = "p-2">
									<p><span class="text-danger"> <?= $p['price'] ?></span> <br><a href="<?= PATH ?>
									page=detail&id=<?= $p['id']?>"><button type="button" class="btn btn-success">Chi tiết</button></a></p>     
								</div>
								<div class = "p-2 ">
								<p><span class="text-decoration-line-through"> <?= $p['price'] ?></span> 
								<br><button type="button" class="btn btn-success">Thêm vào giỏ </button></p>
								</div>  
							</div>
						</div>
					</div>
				</div>
				<?php

			   ?>
					<?php
				}
?>
			