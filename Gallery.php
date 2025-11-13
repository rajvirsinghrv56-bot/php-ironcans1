<body>
<?php include 'blad/navbar.php'; ?>

<style>
.gallery-section {
  padding: 40px 0;
}

.gallery-title {
  text-align: center;
  font-weight: 700;
  margin-bottom: 25px;
  font-size: 2rem;
}

.filter-buttons {
  text-align: center;
  margin-bottom: 25px;
}

.filter-buttons .btn {
  margin: 5px;
  padding: 8px 18px;
  background: #222;
  color: white;
  border-radius: 30px;
  border: none;
  transition: 0.3s;
}

.filter-buttons .btn:hover,
.filter-buttons .btn.active {
  background: #e3b448; /* gold */
  color: #000;
}

.gallery-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: center;
}

.gallery-item {
  flex: 1 1 calc(30% - 10px);
  max-width: 30%;
  border-radius: 10px;
  overflow: hidden;
  cursor: pointer;
  transition: 0.3s;
}

.gallery-item img {
  width: 100%;
  height: 230px;
  object-fit: cover;
  transition: 0.4s;
}

.gallery-item:hover img {
  transform: scale(1.07);
}

#popUp {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.85);
  align-items: center;
  justify-content: center;
  z-index: 999;
}

#popUp img {
  width: 60%;
  max-height: 80vh;
  border-radius: 8px;
}
</style>

<section class="gallery-section">
  <h1 class="gallery-title">Our Gym Gallery</h1>

  <!-- FILTER BUTTONS -->
  <div class="filter-buttons">
    <button class="btn active" onclick="filterGallery('all')">All</button>
    <button class="btn" onclick="filterGallery('banners')">Banners</button>
    <button class="btn" onclick="filterGallery('gym')">Gym </button>
    <button class="btn" onclick="filterGallery('transform')">Transformations</button>
  </div>

  <!-- GALLERY IMAGES -->
  <div class="gallery-grid">

    <!-- Banners -->
    <div class="gallery-item banners"><img src="images/banner1.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner2.jpg"></div>
    
<div class="gallery-item banners"><img src="images/banner4.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner5.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner6.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner7.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner9.jpg"></div>
    <div class="gallery-item banners"><img src="images/banner10.jpg"></div>
 <div class="gallery-item banners"><img src="images/banner11.jpg"></div>

    <!-- Gym Floor -->
    <div class="gallery-item gym"><img src="images/image1.jpg"></div>
    <div class="gallery-item gym"><img src="images/image5.jpg"></div>
    <div class="gallery-item gym"><img src="images/image7.jpg"></div>
    <div class="gallery-item gym"><img src="images/image9.jpg"></div>
    <div class="gallery-item gym"><img src="images/image10.jpg"></div>
    <div class="gallery-item gym"><img src="images/image11.jpg"></div>

    <!-- Transformation -->
    <div class="gallery-item transform"><img src="images/image2.jpg"></div>
    <div class="gallery-item transform"><img src="images/image3.jpg"></div>
    <div class="gallery-item transform"><img src="images/image6.jpg"></div>

  </div>
</section>

<!-- POPUP VIEWER -->
<div id="popUp" onclick="closePopUp()">
  <img id="selectedImage">
</div>

<script>
// FILTER FUNCTION
function filterGallery(category) {
  let items = document.querySelectorAll('.gallery-item');

  items.forEach(item => {
    if (category === 'all') item.style.display = 'block';
    else item.style.display = item.classList.contains(category) ? 'block' : 'none';
  });

  // active button style
  document.querySelectorAll('.filter-buttons .btn').forEach(btn => btn.classList.remove('active'));
  event.target.classList.add('active');
}

// POPUP VIEW
document.querySelectorAll('.gallery-item img').forEach(img => {
  img.onclick = () => {
    document.getElementById('selectedImage').src = img.src;
    document.getElementById('popUp').style.display = 'flex';
  }
});

function closePopUp() {
  document.getElementById('popUp').style.display = 'none';
}
</script>

<?php require 'blad/footer.php'; ?>
</body>
