<?php include "header.php" ?>

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
<?php include "../footer.php"; ?>