
				
	
            <h1 class="text-center mb-5 font">Your Cart</h1>
               <div class="container mt-3">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Hành động</th>
                        <th>Id</th>
                    </tr>
                    </thead>
                     <?php
                    for($i=1;$i<=4;$i++)
                    {
                        echo"<tbody>";
                        echo"<tr>";
                        echo"<td><input type='checkbox'></td>";
                        echo"<td><img src='asset/images/vay.png' style='width:50px'></td>";
                            echo"<td>Tên sản phẩm $i</td>";
                            echo"<td>200.000</td>";
                            echo"<td>1</td>";
                            echo"<td>200.000</td>";
                            echo"
                                <td>
                                <button type= 'button' class= 'btn btn-success rounded'>
                                <i class='fa-solid fa-toggle-off'></i></button>
                                <button type='button'class='btn btn-primary rounded'>
                                <i class='fa-regular fa-eye'></i></button>     
                                <button type='button'class='btn btn-info rounded'>
                                <i class='fa-solid fa-pen-to-square'></i></button>  
                                <button type='button'class='btn btn-danger rounded'>
                                <i class='fa-solid fa-trash-can'></i></button>                            
                                </td>";
                            echo"<td>$i</td>";
                        echo"</tr>";
                        echo"</tbody>";
                    }
                    ?>
                        <tr>
                            <td colspan="5">Tổng cộng</td>
                            <td colspan="3">1.200.00</td>
                        </tr>
                </table>
                </div>
       

           
			
		