<?php   include "../header.php" ?>
<style>
.progress {
	position: relative;
	height: 1.5rem;
}

.progress-bar {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	background-color: #007bff;
	animation: progress-spin 2s linear infinite;
}

.progress-text {
	position: absolute;
	top: 0;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #fff;
	font-weight: bold;
}

@keyframes progress-spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
}
</style>

<div class="container mt-5">
	<h2 class="text-center mb-4">Skills</h2>
	<div class="row">
		<div class="col-md-6">
			<h4>Web Development</h4>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<i class="fab fa-html5 mr-2"></i> HTML
					<div class="progress">
						<div class="progress-bar" style="width: 90%;">
							<span class="progress-text">90%</span>
						</div>
					</div>
				</li>
				<li class="list-group-item">
					<i class="fab fa-css3-alt mr-2"></i> CSS
					<div class="progress">
						<div class="progress-bar" style="width: 85%;">
							<span class="progress-text">85%</span>
						</div>
					</div>
				</li>
				<li class="list-group-item">
					<i class="fab fa-bootstrap mr-2"></i> Bootstrap
					<div class="progress">
						<div class="progress-bar" style="width: 80%;">
							<span class="progress-text">80%</span>
						</div>
					</div>
				</li>
				<li class="list-group-item">
					<i class="fab fa-js-square mr-2"></i> JavaScript
					<div class="progress">
						<div class="progress-bar" style="width: 75%;">
							<span class="progress-text">75%</span>
						</div>
					</div>
				</li>
				<li class="list-group-item">
					<i class="fab fa-php mr-2"></i> PHP
					<div class="progress">
						<div class="progress-bar" style="width: 70%;">
							<span class="progress-text">70%</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-md-6">
			<h4>Mobile Development</h4>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<i class="fab fa-flutter mr-2"></i> Flutter
					<div class="progress">
						<div class="progress-bar" style="width: 60%;">
							<span class="progress-text">60%</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
