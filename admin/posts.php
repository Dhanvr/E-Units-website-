<?php include 'includes/header.php'; ?>

<div id="wrapper">

	<!-- Navigation -->
	<?php include 'includes/navigation.php'; ?>


	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">

					<h1 class="page-header">
						Welcome to the Administration Panel
					</h1>


					<?php
						if (isset($_GET['source'])) {
								$source = $_GET['source'];

						switch ($source) {
							case 'add_new':
								include "includes/add_post.php";
								break;
							case 'contact_view':
								include "includes/view_contact_form.php";
								break;
							case 'add_noti':
								include "includes/add_notification.php";
								break;
							case 'view_user':
								include "includes/view_user.php";
								break;
							case 'add_user':
								include "includes/add_user.php";
								break;
							default:
								include "includes/view_post.php";
								break;
						}
		}
					?>
</div>
				</div>


			</div>

			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
