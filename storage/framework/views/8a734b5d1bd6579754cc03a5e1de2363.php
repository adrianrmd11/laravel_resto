

<?php $__env->startSection('content'); ?>

<!-- Header Checkout -->
<section class="hero-section" style="
    position: relative;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo e(asset('images/checkout.jpeg')); ?>');
    background-size: cover;
    background-position: center;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    border-radius: 0 0 16px 16px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
">
    <div class="container px-4">
        <h1 style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700; background: linear-gradient(to right, #ff8c00, #ff4500); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Checkout Pesanan
        </h1>
        <p style="font-size: 1.1rem; color: #f0f0f0;">Periksa kembali daftar pesanan Anda sebelum melakukan pembayaran</p>
    </div>
</section>


<div class="container mt-5">
    <h2 class="mb-4">Checkout Pesanan</h2>

    <?php if(count($cart) > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $grandTotal = 0; ?>
                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($item['jumlah'])): ?>
                    <tr>
                        <td><?php echo e($item['nama']); ?></td>
                        <td><?php echo e($item['jumlah']); ?></td>
                        <td>Rp<?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
                        <td>Rp<?php echo e(number_format($item['harga'] * $item['jumlah'], 0, ',', '.')); ?></td>
                    </tr>
                    <?php $grandTotal += $item['harga'] * $item['jumlah']; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-end">Total Bayar</th>
                    <th>Rp<?php echo e(number_format($grandTotal, 0, ',', '.')); ?></th>
                </tr>
            </tfoot>
        </table>
        <a href="<?php echo e(route('cart.clear')); ?>" class="btn btn-danger">Kosongkan Keranjang</a>
        <a href="#" class="btn btn-success">Bayar Sekarang</a>
    <?php else: ?>
        <p>Keranjang kosong.</p>
    <?php endif; ?>
</div>

<footer>
     <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2025 <strong>Lezat Vibes</strong>. Semua Hak Dilindungi.</p>
            </div>
        </div>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\projek_awal\adrian\resources\views/checkout.blade.php ENDPATH**/ ?>