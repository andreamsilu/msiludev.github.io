<?php   include "../header.php" ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <a href="project1.html" target="_blank">
          <img class="card-img-top" src="images/pexels-asad-photo-maldives-3293148.jpg" alt="Project 1" 
          style="transition: transform 0.5s ease;
          filter: brightness(70%);
          border-radius: 5px;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Project 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <a href="project2.html" target="_blank">
          <img class="card-img-top" src="images/pexels-frank-cone-3674987.jpg" alt="Project 2" 
          style="transition: transform 0.5s ease;
          filter: brightness(70%);
          border-radius: 5px;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Project 2</h5>
          <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <a href="project3.html" target="_blank">
          <img class="card-img-top" src="images/pexels-isabella-mendes-341013.jpg   " alt="Project 3" 
          style="transition: transform 0.5s ease;
          filter: brightness(70%);
          border-radius: 5px;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Project 3</h5>
          <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const images = document.querySelectorAll('img');

  images.forEach(image => {
    image.addEventListener('mousemove', (e) => {
      const width = image.clientWidth;
      const height = image.clientHeight;
      let x = e.offsetX;
      let y = e.offsetY;
      const moveX = (width / 2) - x;
      const moveY = (height / 2) - y;
      image.style.transform = `scale(1.1) translate(${moveX / 10}px, ${moveY / 10}px)`;
      image.style.filter = `brightness(100%)`;
    });

    image.addEventListener('mouseleave', () => {
      image.style.transform = 'scale(1) translate(0px, 0px)';
      image.style.filter = 'brightness(70%)';
    });
  });
</script>
