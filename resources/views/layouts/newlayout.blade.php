<!DOCTYPE html>
<html lang="en">

@include('includes.head')
<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('includes.header')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @yield('content')
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/website/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('/website/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/website/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/website/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/website/js/main.js')}}"></script>
</body>

</html>