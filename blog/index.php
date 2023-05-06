<?php include "../header.php" ?>
<style>
    .card-img-top {
  height: 400px;
  object-fit: cover;
}

.card-text {
  font-size: 18px;
  line-height: 1.5;
}

.card-footer {
  background-color: #f2f2f2;
}

.card-footer .btn {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
}

.card-footer .btn:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

@media screen and (max-width: 768px) {
  .card-img-top {
    height: 250px;
  }

  .card-text {
    font-size: 16px;
  }
}

.card-icons {
display: flex;
align-items: center;
margin-top: 10px;
}

.card-icons a {
display: flex;
align-items: center;
margin-right: 10px;
color: #555;
text-decoration: none;
}

.card-icons a:hover {
color: #007bff;
}

.card-icons i {
margin-right: 5px;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card my-4">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFRmWtO1zrO6tt35ewAJOE9NpAb8yiwhbrBWyxjVQCZw&s" alt="Blog 1">
        <div class="card-body">
          <h2 class="card-title">Blog 1</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor augue id luctus viverra. Nunc commodo, magna eget dictum blandit, massa odio finibus lacus, euismod placerat augue velit a ipsum. Nunc accumsan odio eget tellus tincidunt, vel scelerisque lorem molestie. Suspendisse potenti. Ut pharetra lectus a elit aliquam volutpat.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
          <span> on January 1, 2022 by Author Name </span>
          <div class="card-icons">
    <a href="#"><i class="far fa-comment"></i> 10</a>
    <a href="#"><i class="far fa-thumbs-up"></i> 50</a>
    <a href="#"><i class="far fa-share-square"></i></a>
        </div>
      </div>
      <div class="card my-4">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1519681393784-d120267933ba" alt="Blog 2">
        <div class="card-body">
          <h2 class="card-title">Blog 2</h2>
          <p class="card-text">Praesent vel consequat mi, vel faucibus justo. Integer non tellus vitae sapien molestie iaculis. Nulla vel orci leo. Nullam sollicitudin urna eget mauris aliquet, nec ultrices nunc dictum. Suspendisse fringilla eleifend dignissim. Integer tincidunt urna vel velit vulputate sagittis. Integer dictum, turpis quis euismod pellentesque, tortor mi ultricies ex, nec aliquet sem libero ac felis. </p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
         <span>Posted on January 1, 2022 by Author Name </span>
          <div class="card-icons">
    <a href="#"><i class="far fa-comment"></i> 10</a>
    <a href="#"><i class="far fa-thumbs-up"></i> 50</a>
    <a href="#"><i class="far fa-share-square"></i></a>
  </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const cardImg = card.querySelector('.card-img-top');
    const cardTitle = card.querySelector('.card-title');
    const cardText =

    card.querySelector('.card-text');
const cardBtn = card.querySelector('.card-btn');
const cardWidth = card.clientWidth;
const cardHeight = card.clientHeight;
const cardImgWidth = cardImg.clientWidth;
const cardImgHeight = cardImg.clientHeight;

const offsetX = e.offsetX - cardImgWidth / 2;
const offsetY = e.offsetY - cardImgHeight / 2;

const rotateX = offsetY / cardImgHeight * 10;
const rotateY = -offsetX / cardImgWidth * 10;

cardImg.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.1)`;

cardTitle.style.transform = `translateZ(100px)`;
cardText.style.transform = `translateZ(75px)`;
cardBtn.style.transform = `translateZ(50px)`;
});

card.addEventListener('mouseleave', () => {
const cardImg = card.querySelector('.card-img-top');
const cardTitle = card.querySelector('.card-title');
const cardText = card.querySelector('.card-text');
const cardBtn = card.querySelector('.card-btn');
cardImg.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)`;
cardTitle.style.transform = `translateZ(0px)`;
cardText.style.transform = `translateZ(0px)`;
cardBtn.style.transform = `translateZ(0px)`;
});
});
</script>