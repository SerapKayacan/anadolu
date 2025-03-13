
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Bize Ulaşın</h4>

                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+90 544 725 81 25</p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Hizmetlerimiz</h4>
                    <?php $__currentLoopData = $serviceCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a  title="<?php echo e($serviceCategory->title); ?> Görüntüle" href="<?php echo e(route('services.byCategory', ['slug' => $serviceCategory->slug])); ?>" class="btn btn-link">
                            <?php echo e($serviceCategory->title); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Alt Menü</h4>
                    <a class="btn btn-link" title="Hakkimizda Görüntüle" href="">Hakkımızda</a>

                    <a class="btn btn-link" title="Hizmetlerimizi Görüntüle" href="">Hizmetlerimiz</a>
                </div>

            </div>
        </div>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/lib/lightbox/js/lightbox.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('assets/frontend/js/main.js')); ?>"></script>
    <script>
        window.addEventListener("load", function () {
            document.getElementById("spinner").style.display = "none";
        });
    </script>

    </body>
</html>

<?php /**PATH C:\xampp\htdocs\anadolu\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>