<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Quản lý sinh viên</title>
</head>

<body>
	<div class="container">
		<div class="navigation" id="navigation">
			<ul>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="school-outline"></ion-icon></span>
						<span class="title">Entrepid Advisors</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
						<span class="title">Bảng tin</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="copy-outline"></ion-icon></ion-icon></span>
						<span class="title">Danh mục</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
						<span class="title">Sinh viên</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="apps-outline"></ion-icon></span>
						<span class="title">Lớp học</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
						<span class="title">Thông báo</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
						<span class="title">Đăng xuất</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="main" id="main">

			<div class="topbar">
				<div class="toogle" id="toogle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
				<div class="search">
					<label>
						<input type="text" placeholder="Tìm kiếm...">
						<ion-icon name="search-outline"></ion-icon>
					</label>
				</div>
				<div class="user">
					<img src="masteradmin.jpg">
				</div>
			</div>

			<div class="cardbox">
				<div class="card">
					<div>
						<div class="numbers">1,504</div>
						<div class="cardname">Lượt truy cập</div>
					</div>
					<div class="inconBx">
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">4,048</div>
						<div class="cardname">Sinh viên</div>
					</div>
					<div class="inconBx">
						<ion-icon name="people-circle-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">3,504</div>
						<div class="cardname">Đã đăng ký</div>
					</div>
					<div class="inconBx">
						<ion-icon name="clipboard-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">20 tỷ đồng</div>
						<div class="cardname">Công nợ</div>
					</div>
					<div class="inconBx">
						<ion-icon name="cash-outline"></ion-icon>
					</div>
				</div>
			</div>

			<div class="detaillist">
				<div class="recentStudent">
					<div class="cardHeader">
						<h2>Recent Student</h2>
						<a href="#" class="btn">Xem tất cả </a>
					</div>
					<table>
						<thead>
							<tr>
								<td>Họ tên</td>
								<td>Lớp</td>
								<td>Công nợ</td>
								<td>Email</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nguyễn Anh Khoa</td>
								<td>Lập trình PHP</td>
								<td>5,000,000</td>
								<td><span class="status delivered">nguyenkhoa12@gmail.com</span></td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>Nguyễn Anh Khoa</td>
								<td>Lập trình PHP</td>
								<td>5,000,000</td>
								<td><span class="status delivered">nguyenkhoa12@gmail.com</span></td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>Nguyễn Anh Khoa</td>
								<td>Lập trình PHP</td>
								<td>5,000,000</td>
								<td><span class="status delivered">nguyenkhoa12@gmail.com</span></td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>Nguyễn Anh Khoa</td>
								<td>Lập trình PHP</td>
								<td>5,000,000</td>
								<td><span class="status delivered">nguyenkhoa12@gmail.com</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="recentStudent">
					<div class="cardHeader">
						<h2>New student</h2>
					</div>
					<table>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
						<tr>
							<td width="60"><div class="imgBx"><img src="masteradmin.jpg"></div></td>
							<td><h4>KhoaNguyen<br><span>VungTau</span></h4></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript">
		let toogle		= 	document.querySelector('#toogle');
		let navigation	=	document.querySelector('#navigation');
		let main		=	document.querySelector('#main');

		document.getElementById('toogle').onclick = function() {
    		navigation.classList.toggle('active');
    		main.classList.toggle('active');
		}

		let list = document.querySelectorAll('#navigation li');
		function activeLink(){
			list.forEach((item) => 
			item.classList.remove('hovered'));
			this.classList.add('hovered');
		}
		list.forEach((item) => 
			item.addEventListener('mouseover',activeLink));
	</script>
</body>
</html>