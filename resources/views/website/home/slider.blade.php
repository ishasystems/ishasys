<header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('public/image/slider/1.jpg') }}" alt="images not found">
               
                {{-- <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg" alt="images not found"> --}}
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            {{-- <h2>Teimagine Digital Experience with</h2> --}}
                            <h1>CCTV & SURVILLANCE</h1>
                            {{-- <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4> --}}
                        </div>
                    </div>
                 </div>
            </div>
            <div class="item">
                {{-- <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg" alt="images not found"> --}}
                <img src="{{ asset('public/image/slider/2.jpeg') }}" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1>BEST BIOMETRICS & ACCESS CONTROL SYSTEM</h1>
                            {{-- <h1>Intelligent solutions</h1> --}}
                            {{-- <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4> --}}
                        </div>
                    </div>
                 </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/image/slider/3.jpeg') }}" alt="images not found">
               
                {{-- <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg" alt="images not found"> --}}
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            {{-- <h2>Peimagine Digital Experience with</h2> --}}
                            <h1>ERP & ATTENDANCE SOFTWARE</h1>
                            {{-- <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4> --}}
                        </div>
                    </div>
                 </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/image/slider/4.jpeg') }}" alt="images not found">
               
                {{-- <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg" alt="images not found"> --}}
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            {{-- <h2>Peimagine Digital Experience with</h2> --}}
                            <h1>GATE AUTOMATION & SOLUTION</h1>
                            {{-- <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4> --}}
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </header>

    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    </script>