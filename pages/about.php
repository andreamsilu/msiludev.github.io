<?php   include "../header.php" ?>
	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 m-5">
				<div class="card">
					<div class="card-header">
                    <div class="text-center">
						<img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle">
					</div>
					<div class="card-body">
						<h5 class="card-title">Andrew</h5>
						<p class="card-text">I am a software developer with experience in web development and database management. I am passionate about creating efficient and user-friendly applications that solve real-world problems.</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Download Resume</a>
						<a href="#" class="btn btn-secondary">View Projects</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h1>About Me</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sapien vel pulvinar euismod, lorem nibh varius massa, ut maximus est nulla nec quam. Vestibulum eget fringilla odio. Nullam maximus quis mauris ut mollis. Nulla quis elit ut elit tristique tincidunt. Morbi in ultricies justo. Fusce euismod volutpat magna, sed sollicitudin enim tristique non. Curabitur dictum ligula non lectus venenatis, ut tincidunt ipsum sagittis. Proin commodo nisi a nunc laoreet ultricies.</p>
				<p>Morbi commodo nibh quis libero consectetur, at euismod metus cursus. Integer sed tristique leo. Vestibulum non felis in nunc laoreet mattis. Integer lacinia, dolor vel aliquam faucibus, turpis ex vestibulum ipsum, eget malesuada elit urna a felis. Suspendisse vel sollicitudin nunc. Ut semper euismod velit, id auctor nisi pretium id. Integer mattis blandit tellus, at bibendum lorem volutpat ut. Fusce ut rutrum eros. Sed tristique ut augue vitae iaculis. Suspendisse tincidunt ante dolor, eu bibendum felis ultricies ac. Integer mollis a erat id eleifend. Sed eget odio et nisl ullamcorper pretium sed quis turpis. Etiam quis luctus massa, ac tempor metus. Etiam vulputate arcu vel magna vestibulum, id tincidunt eros eleifend.</p>
			</div>
		</div>
	</div>
    </div>
<?php include 'footer.php'?>

    </body>
    <!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Inline JS -->
<script>
	// Function to toggle active class on nav links
		// Function to toggle active class on nav links
        $(document).ready(function() {
		// Get current page URL
		var url = window.location.href;

		// Select all navbar links
		$('.navbar-nav a').each(function() {
			// If the link href matches the current page URL, add the active class to the link
			if (url === (this.href)) {
				$(this).addClass('active');
			}
		});
	});
</script>
<div>
</div>
</body>
</html>
