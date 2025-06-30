<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Booking Restoran</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="image-section">
            <div class="image-slider-wrapper">
                <div class="image-slider">
                    <img src="<?php echo e(asset('images/burger.jpeg')); ?>" class="active" alt="Burger" />
                    <img src="<?php echo e(asset('images/spicy_chicken.jpeg')); ?>" alt="Spicy Chicken" />
                    <img src="<?php echo e(asset('images/iced_mocha.jpeg')); ?>" alt="Iced Mocha" />
                </div>
            </div>
        </div>

        <div class="form-section">
            <h1>Formulir Booking Restoran</h1>
            <div class="line-divider"></div>

            <div class="view-reservations">
                <a href="/bookings">Lihat Daftar Reservasi</a>
            </div>

            <?php if(session('success')): ?>
                <p style="color: green"><?php echo e(session('success')); ?></p>
            <?php endif; ?>

            <form method="POST" action="/booking">
                <?php echo csrf_field(); ?>

                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required value="<?php echo e(old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?php echo e(old('email')); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="phone">No. HP</label>
                <input type="text" name="phone" id="phone" required value="<?php echo e(old('phone')); ?>">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="guest_total">Jumlah Tamu</label>
                <input type="number" name="guest_total" id="guest_total" required value="<?php echo e(old('guest_total')); ?>">
                <?php $__errorArgs = ['guest_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="date">Tanggal</label>
                <input type="date" name="date" id="date" required value="<?php echo e(old('date')); ?>">
                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="time">Waktu</label>
                <input type="time" name="time" id="time" required value="<?php echo e(old('time')); ?>">
                <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="table_id">Pilih Meja</label>
                <select name="table_id" id="table_id" required>
                    <option value="">-- Pilih Meja --</option>
                    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($table->id); ?>" <?php echo e(!$table->available ? 'disabled' : ''); ?>>
                            Meja <?php echo e($table->number); ?> <?php echo e(!$table->available ? '(Tidak Tersedia)' : ''); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['table_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="note">Catatan</label>
                <textarea name="note" id="note"><?php echo e(old('note')); ?></textarea>

                <button type="submit">Kirim Reservasi</button>
            </form>
        </div>
    </div>

    <script>
        const images = document.querySelectorAll(".image-slider img");
        let current = 0;

        setInterval(() => {
            images[current].classList.remove("active");
            current = (current + 1) % images.length;
            images[current].classList.add("active");
        }, 4000);
    </script>
</body>
</html>
<?php /**PATH C:\laravel\projek_awal\adrian\resources\views/booking_form.blade.php ENDPATH**/ ?>