<?php

include_once __DIR__ . '\View\generales.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php

headerGeneral();

?>

</head>

<body class="body-wrapper">

<section>
<?php

navbar();

?>
</section>
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">Samanta Doe</h5>
						<p>Joined February 06, 2017</p>
						<a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li><a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
							<li>
								<a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite Ads <span>5</span></a>
							</li>
							<li>
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved Ads <span>12</span></a>
							</li>
							<li class="active">
								<a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a>
							</li>
							<li>
								<a href="logout.html"><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="delete-account.html"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My Ads</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Category</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-1.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Macbook Pro 15inch</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-2.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Study Table Combo</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Posted on: </strong><time>Feb 12, 2017</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>USA</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-3.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Macbook Pro 15inch</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-4.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Macbook Pro 15inch</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-1.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Macbook Pro 15inch</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
									<span class="status active"><strong>Status</strong>Active</span>
									<span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
								</td>
								<td class="product-category"><span class="categories">Laptops</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
<?php

footerInfo();

?>
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
<?php

footerCopyright();

?>
</footer>

<?php

javascripts();

?>

</body>

</html>