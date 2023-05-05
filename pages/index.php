<!DOCTYPE html>
<html>
<head>
	<title>Andrew - Software Developer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-D5FtD5P5oUpenWkYXpGpmfql3q3cKnl2WdBlzJvV7RlKjZpzLO8TJiXrYD2mrPTT6F+V8WZ+z6UvzIgjx6xu0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Inline CSS -->
	<style>
		body {
			background-color: #F5F5F5;
		}

		.navbar {
			background-color: #343A40;
		}

		.nav-link {
			color: #FFF;
		}

		h1 {
			color: #343A40;
			margin-top: 40px;
		}

		p {
			color: #343A40;
		}

		.btn-primary {
			background-color: #007BFF;
			border-color: #007BFF;
		}

		.btn-primary:hover {
			background-color: #0069D9;
			border-color: #0062CC;
		}

		.btn-secondary {
			background-color: #6C757D;
			border-color: #6C757D;
		}

		.btn-secondary:hover {
			background-color: #5A6268;
			border-color: #545B62;
		}
	</style>
</head>
<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-md navbar-dark">
		<a class="navbar-brand" href="#">Andrew</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			<span class="navbar-toggler-text">Menu</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../pages/index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../pages/about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../pages/skills.php">Skills</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../pages/portifolio.php">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../blog/index.php">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../pages/contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

<!-- Main Content -->
<div class="container">
	<h1>Welcome to my website</h1>
	<p>I am a software developer with expertise in building web applications using the latest technologies. With several years of experience, I have developed a strong understanding of software development best practices and agile methodologies.</p>
	<button class="btn btn-primary">View my work</button>
	<button class="btn btn-secondary">Learn more about me</button>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNV6Zp" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Inline JS -->
<script>
	document.querySelectorAll('.nav-link').forEach((link) => {
		link.addEventListener('mouseover', () => {
			link.style.color = '#FFD700';
		});

		link.addEventListener('mouseout', () => {
			link.style.color = '#FFF';
		});
	});

	document.querySelectorAll('.btn').forEach((button) => {
		button.addEventListener('mouseover', () => {
			button.style.backgroundColor = '#FFD700';
			button.style.borderColor = '#FFD700';
		});

		button.addEventListener('mouseout', () => {
			button.style.backgroundColor = button.classList.contains('btn-primary') ? '#007BFF' : '#6C757D';
			button.style.borderColor = button.classList.contains('btn-primary') ? '#007BFF' : '#6C757D';
		});
	});
</script>
</body>
</html>
