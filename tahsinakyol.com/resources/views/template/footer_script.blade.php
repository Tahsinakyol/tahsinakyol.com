{{--
        ******    *******
          **      ** * **
          **  **  **   ** --}}

<!-- jQuery v3.7.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- AOS Animate -->
<script src="{{ asset('plugins/aos-master/dist/aos.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('plugins/slick_slider/slick/slick.min.js') }}"></script>
<!-- Bootstrap v5.0.2 -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Local Script Documents -->
<script src="{{ asset('js/script.js') }}"></script>
<!-- Disable AOS Animate in Mobile Devices -->
<script>
    AOS.init();
    AOS.init({
        disable: function() {
            var maxWidth = 991;
            return window.innerWidth < maxWidth;
        }
    });
</script>
