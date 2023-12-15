<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM product WHERE id=$id";
    $result =$f->getOne($sql);
    
?>
<div class="col-md-5 img-detail border">
    <img src="asset/images/<?= $result['image']?>"/>
</div>
<div class="col-md-5">
    <h3 class="font-weight-semi-bold"><?= $result['name']?></h3>    <div class="d-flex-mb-3">
        <div class="text-primary mr-2">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        <span class="pt-1">(50 Reviews)</span>
    </div>
    <h3 class="font-weight-sami-bold mb-4"><?= $result['price'] ?>    
    <p class=""><?= $result['discription']?></p>
    <div class="input-group quantity mr-3" style="width: 130px;">
        <div class="input-group-btn">
            <button class="btn btn-primary btn-minus">
            <i class="fa-solid fa-minus"></i>
            </button>
        </div>
        <input type="text" class="form-control text-center" value="1">
        <div class="input-group-btn">
            <button class="btn btn-primary btn-minus">
            <i class="fa-solid fa-plus"></i>
            </button>
        </div> <br>
        <button class="btn btn-primary" type="submit"> <i class="fa-solid fa-cart-shopping"></i>Add to Cart
</button>
    </div>
</div>