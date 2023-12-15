            <p>
			<?php
			$masv='2122110147';
			$hoten='Nguyễn Đình Lợi';
			$lop='CCQ2211D';
			$email='SinhVien@gmail.com';

			echo"<h1>Thông Tin Sinh Viên</h1>";
			echo"<p>Mã số sinh viên: $masv </p>";
			echo"<p>Họ tên: $hoten</p>";
			echo"<p>Lớp: $lop</p>";
			echo"<p>Email: $email</p>";
			echo"<p>Sở thích:</p>";
			?>
			</p>
			<ul class="list-group col-2 ">
				<li class="list-group-item active">sở thích</li>
				<?php
				for($i=1;$i<=4;$i++)
				if($i%2==0)
				{
					echo"<li class='list-group-item text-primary'>sở thích $i <span class='badge rounded-pill bg-primary float-end'>$i</span></li>";
		
				}
				else
				{
					echo"<li class='list-group-item text-warning'>sở thích $i <span class='badge  rounded-pill bg-primary float-end'>$i</span></li>";
				}
				?>
			</ul>
