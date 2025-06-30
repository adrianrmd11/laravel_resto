

<?php $__env->startSection('content'); ?>
<!-- Including Bootstrap 5 CSS and AOS for styling and animations -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap');
    body {
        font-family: 'Inter', sans-serif;
        background: #f9fafb;
        overflow-x: hidden;
    }
    .hero-section {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo e(asset('images/burger.jpeg')); ?>');
        background-size: cover;
        background-position: center;
        min-height: 550px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        border-radius: 0 0 16px 16px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    .hero-section h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.8rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        background: linear-gradient(to right, #ff8c00, #ff4500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
    }
    .hero-section p {
        font-size: 1.15rem;
        max-width: 600px;
        margin: 0 auto 1.5rem;
        color: #e6e6e6;
        line-height: 1.7;
    }
    .hero-section .btn {
        font-size: 1rem;
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .carousel-img {
        height: 450px;
        width: 100%;
        object-fit: cover;
        border-radius: 12px;
        filter: brightness(95%) contrast(110%);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .carousel-caption {
        background: rgba(0,0,0,0.65);
        border-radius: 8px;
        padding: 15px 20px;
        bottom: 25px;
        max-width: 85%;
        margin: 0 auto;
        text-align: center;
    }
    .carousel-caption h5 {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        color: #fff;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }
    .carousel-caption p {
        font-size: 0.9rem;
        color: #f0f0f0;
        margin-bottom: 0;
    }
    .btn-custom {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 50px;
        padding: 12px 35px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        display: inline-block;
        width: 200px; /* Fixed width for consistent button size */
        text-align: center;
    }
    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .btn-primary-custom {
        background: linear-gradient(to right, #ff8c00, #ff4500);
        border: none;
        color: #fff;
    }
    .btn-secondary-custom {
        background: linear-gradient(to right, #ff6b6b, #ff9e53);
        border: none;
        color: #fff;
    }
    .card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .card-body h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        background: linear-gradient(to right, #ff8c00, #ff4500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
    }
    .card-body p {
        font-size: 0.9rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.3rem;
        text-align: center;
        margin-bottom: 2.5rem;
        color: #2c2c2c;
    }
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .hero-section {
            min-height: 500px;
        }
        .hero-section h1 {
            font-size: 3.2rem;
        }
        .carousel-img {
            height: 400px;
        }
    }
    @media (max-width: 768px) {
        .hero-section {
            min-height: 450px;
        }
        .hero-section h1 {
            font-size: 2.8rem;
        }
        .hero-section p {
            font-size: 1rem;
            max-width: 90%;
        }
        .carousel-img {
            height: 300px;
        }
        .carousel-caption h5 {
            font-size: 1.4rem;
        }
        .carousel-caption p {
            font-size: 0.85rem;
        }
        .btn-custom {
            width: 180px;
            padding: 10px 30px;
        }
    }
    @media (max-width: 576px) {
        .hero-section {
            min-height: 400px;
        }
        .hero-section h1 {
            font-size: 2.2rem;
        }
        .hero-section .btn {
            padding: 10px 30px;
            font-size: 0.9rem;
        }
        .carousel-img {
            height: 250px;
        }
        .carousel-caption h5 {
            font-size: 1.2rem;
        }
        .section-title {
            font-size: 2rem;
        }
        .btn-custom {
            width: 160px;
            font-size: 0.85rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container px-4 px-md-5">
        <h1>Restoran Lezat Vibes</h1>
        <p>Discover bold flavors and vibrant vibes in every bite. Your perfect dining experience awaits.</p>
        <a href="<?php echo e(route('reservasi.index')); ?>" class="btn btn-primary-custom btn-custom">Reserve Your Table</a>
    </div>
</section>

<!-- Carousel Section -->
删

<!-- Carousel Section -->
<section class="container px-4 px-md-5 my-12">
    <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">Our Signature Dishes</h2>
    <div id="restaurantCarousel" class="carousel slide rounded-3 shadow-sm" data-bs-ride="carousel" data-bs-interval="4000" data-aos="zoom-in" data-aos-delay="100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#restaurantCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('images/burger.jpeg')); ?>" class="d-block w-100 carousel-img" alt="Signature Burger">
                <div class="carousel-caption">
                    <h5>Neon Burger Bliss</h5>
                    <p>Crafted for taste, styled for perfection.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('images/spicy_chicken.jpeg')); ?>" class="d-block w-100 carousel-img" alt="Spicy Chicken">
                <div class="carousel-caption">
                    <h5>Spicy Chicken Heat</h5>
                    <p>Flavors that ignite your senses.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('images/iced_mocha.jpeg')); ?>" class="d-block w-100 carousel-img" alt="Iced Mocha">
                <div class="carousel-caption">
                    <h5>Iced Mocha Dream</h5>
                    <p>Smooth, bold, and irresistibly chill.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#restaurantCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Call to Action Section -->
<section class="container px-4 px-md-5 my-12">
    <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">Join the Experience</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
                <div class="card-body p-5 text-center d-flex flex-column align-items-center">
                    <h3 class="mb-3">Book a Table</h3>
                    <p class="mb-4 flex-grow-1">Secure your spot for a memorable dining experience.</p>
                    <a href="<?php echo e(route('reservasi.index')); ?>" class="btn btn-primary-custom btn-custom mt-auto">Reserve Now</a>
                </div>
            </div>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
                <div class="card-body p-5 text-center d-flex flex-column align-items-center">
                    <h3 class="mb-3">Explore Our Menu</h3>
                    <p class="mb-4 flex-grow-1">Discover dishes crafted to delight your palate.</p>
                    <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-secondary-custom btn-custom mt-auto">View Menu</a>
                </div>
            </div>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
                <div class="card-body p-5 text-center d-flex flex-column align-items-center">
                    <h3 class="mb-3">Check Your Booking</h3>
                    <p class="mb-4 flex-grow-1">Stay updated on your reservation details.</p>
                    <a href="<?php echo e(route('lihat.reservasi')); ?>" class="btn btn-primary-custom btn-custom mt-auto">View Booking</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap 5 JavaScript and AOS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-out-cubic',
        once: true
    });
</script>
<!-- Footer Section -->
<footer class="footer mt-5 text-white pt-5 pb-4" style="background-color: #2c2c2c;">
    <div class="container text-md-left">
        <div class="row text-md-left text-center">

            <!-- About -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold text-uppercase">Lezat Vibes</h5>
                <p>Kami menyajikan hidangan terbaik dengan pengalaman tak terlupakan. Kunjungi restoran kami untuk rasa yang otentik dan suasana yang menyenangkan.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold text-uppercase">Link Cepat</h5>
                <p><a href="<?php echo e(route('menu.index')); ?>" class="text-white text-decoration-none">Menu</a></p>
                <p><a href="<?php echo e(route('reservasi.index')); ?>" class="text-white text-decoration-none">Reservasi</a></p>
                <p><a href="<?php echo e(route('lihat.reservasi')); ?>" class="text-white text-decoration-none">Cek Booking</a></p>
            </div>

            <!-- Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold text-uppercase">Kontak Kami</h5>
                <p><i class="bi bi-geo-alt-fill me-2"></i> Jl. Rasa No. 123, Kota Lezat</p>
                <p><i class="bi bi-envelope-fill me-2"></i> info@lezatvibes.com</p>
                <p><i class="bi bi-phone-fill me-2"></i> +62 812-3456-7890</p>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p class="mb-0">&copy; 2025 <strong>Lezat Vibes</strong>. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </div>
</footer>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\projek_awal\adrian\resources\views/home.blade.php ENDPATH**/ ?>