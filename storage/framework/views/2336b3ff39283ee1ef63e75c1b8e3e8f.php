

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2 class="mb-4 text-center fw-bold text-dark" style="font-size: 2.5rem; letter-spacing: 1px;">Menu Makanan Cepat Saji</h2>

    <div class="row g-4">
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-lg h-100 border-0 rounded-3 overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s;">
                <img src="<?php echo e($menu['image'] ?? 'https://via.placeholder.com/300x200'); ?>" class="card-img-top" alt="<?php echo e($menu['nama']); ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold text-dark"><?php echo e($menu['nama']); ?></h5>
                    <p class="card-text text-muted mb-2">Harga: Rp<?php echo e(number_format($menu['harga'], 0, ',', '.')); ?></p>
                    <p class="card-text text-secondary small"><?php echo e($menu['deskripsi'] ?? 'Nikmati hidangan lezat ini!'); ?></p>
                    
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <button class="btn btn-outline-danger btn-sm update-cart" data-action="decrease" data-nama="<?php echo e($menu['nama']); ?>" data-harga="<?php echo e($menu['harga']); ?>" style="width: 40px;">
                            <i class="fas fa-minus"></i>
                        </button>
                        <span id="qty-<?php echo e(Str::slug($menu['nama'])); ?>" class="px-3 fw-bold">
                            <?php echo e(session('cart')[$menu['nama']]['jumlah'] ?? 0); ?>

                        </span>
                        <button class="btn btn-danger btn-sm update-cart" data-action="increase" data-nama="<?php echo e($menu['nama']); ?>" data-harga="<?php echo e($menu['harga']); ?>" style="width: 40px;">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('cart'); ?>
<style>
    .floating-cart {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: linear-gradient(45deg, #dc3545, #ff6b6b);
        color: #fff;
        border-radius: 50px;
        padding: 12px 20px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        z-index: 10000;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: transform 0.2s;
    }

    .floating-cart:hover {
        transform: scale(1.1);
    }

    .cart-count {
        background-color: #fff;
        color: #dc3545;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 50%;
        font-size: 0.9rem;
    }

    .cart-dropdown {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 320px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 9999;
        padding: 15px;
        border: none;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .cart-dropdown h6 {
        margin-bottom: 15px;
        font-weight: bold;
        color: #333;
    }

    .cart-dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
        max-height: 250px;
        overflow-y: auto;
    }

    .cart-dropdown ul li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9rem;
        padding: 10px 0;
        border-bottom: 1px solid #f1f1f1;
    }

    .cart-dropdown ul li:last-child {
        border-bottom: none;
    }

    .checkout-btn {
        margin-top: 15px;
        width: 100%;
        background: #28a745;
        border: none;
        border-radius: 8px;
        padding: 10px;
        font-weight: bold;
        transition: background 0.3s;
    }

    .checkout-btn:hover {
        background: #218838;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
    }
</style>

<div class="floating-cart" id="floating-cart">
    <i class="fas fa-shopping-cart"></i>
    <span class="cart-count" id="cart-count"><?php echo e(session('cart') ? array_sum(array_column(session('cart'), 'jumlah')) : 0); ?></span>
</div>

<div class="cart-dropdown" id="cart-dropdown">
    <h6>Keranjang Belanja</h6>
    <ul id="cart-list">
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <span><?php echo e($item['nama'] ?? 'Item'); ?> x <?php echo e($item['jumlah'] ?? 1); ?></span>
                <span>Rp<?php echo e(number_format(($item['harga'] ?? 0) * ($item['jumlah'] ?? 1), 0, ',', '.')); ?></span>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="fw-bold mt-2">
                <span>Total:</span>
                <span>Rp<?php echo e(number_format(array_sum(array_map(fn($item) => $item['harga'] * $item['jumlah'], session('cart'))), 0, ',', '.')); ?></span>
            </li>
        <?php else: ?>
            <li>Keranjang kosong</li>
        <?php endif; ?>
    </ul>
    <a href="<?php echo e(route('checkout')); ?>" class="btn btn-success btn-sm checkout-btn">Lanjut ke Checkout</a>
</div>

<script>
    // Font Awesome for icons
    document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">');

    const cartCountEl = document.getElementById('cart-count');
    const cartListEl = document.getElementById('cart-list');
 <!---->
    document.querySelectorAll('.update-cart').forEach(button => {
        button.addEventListener('click', function () {
            const action = this.dataset.action;
            const nama = this.dataset.nama;
            const harga = this.dataset.harga;

            fetch("<?php echo e(route('cart.update')); ?>", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                body: JSON.stringify({ nama, harga, action })
            })
            .then(res => res.json())
            .then(data => {
                // Update quantity in UI
                const qtyEl = document.getElementById('qty-' + slugify(nama));
                qtyEl.textContent = data.qty;

                // Update total items in cart icon
                cartCountEl.textContent = data.total_items;

                // Update cart dropdown content
                cartListEl.innerHTML = '';
                if (data.items.length > 0) {
                    data.items.forEach(item => {
                        cartListEl.innerHTML += `<li><span>${item.nama} x ${item.jumlah}</span><span>Rp${(item.harga * item.jumlah).toLocaleString('id-ID')}</span></li>`;
                    });
                    // Add total
                    const total = data.items.reduce((sum, item) => sum + (item.harga * item.jumlah), 0);
                    cartListEl.innerHTML += `<li class="fw-bold mt-2"><span>Total:</span><span>Rp${total.toLocaleString('id-ID')}</span></li>`;
                } else {
                    cartListEl.innerHTML = '<li>Keranjang kosong</li>';
                }
            });
        });
    });

    function slugify(text) {
        return text.toString().toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
    }

    const floatingCart = document.getElementById('floating-cart');
    const cartDropdown = document.getElementById('cart-dropdown');

    floatingCart.addEventListener('click', function () {
        cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function (e) {
        if (!floatingCart.contains(e.target) && !cartDropdown.contains(e.target)) {
            cartDropdown.style.display = 'none';
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\projek_awal\adrian\resources\views/menu.blade.php ENDPATH**/ ?>