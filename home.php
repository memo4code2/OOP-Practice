<?php   include "./OOP-Task1.php"  ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Everyday carry</title>

  <!-- Bootstrap + Icons + Font -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

 
</head>
<body>

<div class="container py-5">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-end mb-4">
    <div>
      <div class="eyebrow"></div>
      <h1 class="page-title mb-0">OOP = Clean Code =</h1> 
    </div>
    <div class="bag-pill d-flex align-items-center gap-2">
      <i class="bi bi-bag"></i> Bag
      <span class="badge" id="bagCount">0</span>
    </div>
  </div>

  <!-- Cards -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">

    <!-- 1 -->
    <div class="col">
      <div class="card product-card h-100">
        <div class="position-relative">
          <span class="tag tag-sale">-<?php echo product::DISCOUNT; ?>%</span>
          <img src="<?php echo $prod1->image; ?>" class="product-img" alt="<?php echo $prod1->name; ?>">
        </div>
        <div class="card-body p-3">
          <div class="category"><?php echo $prod1->brand; ?></div>
          <h5 class="product-title"><?php $prod1->getName('Arc Wireless Headphones'); ?></h5>
          <p class="text-muted small"><?php echo $prod1->description; ?></p>
          <div class="d-flex align-items-center gap-1 rating mb-2">
            <span class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
            </span>
            <strong>4.6</strong> <small>(218 reviews)</small>
          </div>
          <div class="mb-3">
            <span class="price price-sale"><?php $prod1->priceAfterDiscount(100); ?></span>
            <small class="d-block text-muted">Including $<?php echo $prod1->tax; ?> tax: <?php $prod1->getFinalPrice(10); ?></small>
          </div>
          <button class="btn btn-bag add-to-bag"><i class="bi bi-plus-lg me-1"></i> Add to bag</button>
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="col">
      <div class="card product-card h-100">
        <div class="position-relative">
          <span class="tag tag-sale">-<?php echo product::DISCOUNT; ?>%</span>
          <img src="<?php echo $prod2->image; ?>" class="product-img" alt="<?php echo $prod2->name; ?>">
        </div>
        <div class="card-body p-3">
          <div class="category"><?php echo $prod2->brand; ?></div>
          <h5 class="product-title"><?php $prod2->getName('Meridian Leather Watch'); ?></h5>
          <p class="text-muted small"><?php echo $prod2->description; ?></p>
          <div class="d-flex align-items-center gap-1 rating mb-2">
            <span class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </span>
            <strong>4.9</strong> <small>(64 reviews)</small>
          </div>
          <div class="mb-3">
            <span class="price price-sale"><?php $prod2->priceAfterDiscount(129); ?></span>
            <small class="d-block text-muted">Including $<?php echo $prod2->tax; ?> tax: <?php $prod2->getFinalPrice(13); ?></small>
          </div>
          <button class="btn btn-bag add-to-bag"><i class="bi bi-plus-lg me-1"></i> Add to bag</button>
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="col">
      <div class="card product-card h-100">
        <div class="position-relative">
          <span class="tag tag-sale">-<?php echo product::DISCOUNT; ?>%</span>
          <img src="<?php echo $prod3->image; ?>" class="product-img" alt="<?php echo $prod3->name; ?>">
        </div>
        <div class="card-body p-3">
          <div class="category"><?php echo $prod3->brand; ?></div>
          <h5 class="product-title"><?php $prod3->getName('Commuter Backpack 22L'); ?></h5>
          <p class="text-muted small"><?php echo $prod3->description; ?></p>
          <div class="d-flex align-items-center gap-1 rating mb-2">
            <span class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
            </span>
            <strong>4.3</strong> <small>(1,042 reviews)</small>
          </div>
          <div class="mb-3">
            <span class="price price-sale"><?php $prod3->priceAfterDiscount(99); ?></span>
            <small class="d-block text-muted">Including $<?php echo $prod3->tax; ?> tax: <?php $prod3->getFinalPrice(10); ?></small>
          </div>
          <button class="btn btn-bag add-to-bag"><i class="bi bi-plus-lg me-1"></i> Add to bag</button>
        </div>
      </div>
    </div>

    <!-- 4 -->
    <div class="col">
      <div class="card product-card h-100">
        <div class="position-relative">
          <span class="tag tag-sale">-<?php echo product::DISCOUNT; ?>%</span>
          <img src="<?php echo $prod4->image; ?>" class="product-img" alt="<?php echo $prod4->name; ?>">
        </div>
        <div class="card-body p-3">
          <div class="category"><?php echo $prod4->brand; ?></div>
          <h5 class="product-title"><?php $prod4->getName('Canvas Market Tote'); ?></h5>
          <p class="text-muted small"><?php echo $prod4->description; ?></p>
          <div class="d-flex align-items-center gap-1 rating mb-2">
            <span class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </span>
            <strong>4.7</strong> <small>(389 reviews)</small>
          </div>
          <div class="mb-3">
            <span class="price price-sale"><?php $prod4->priceAfterDiscount(38); ?></span>
            <small class="d-block text-muted">Including $<?php echo $prod4->tax; ?> tax: <?php $prod4->getFinalPrice(4); ?></small>
          </div>
          <button class="btn btn-bag add-to-bag"><i class="bi bi-plus-lg me-1"></i> Add to bag</button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Simple bag counter
  const count = document.getElementById('bagCount');
  document.querySelectorAll('.add-to-bag').forEach(btn => {
    btn.addEventListener('click', () => count.textContent = +count.textContent + 1);
  });
</script>
</body>
</html>