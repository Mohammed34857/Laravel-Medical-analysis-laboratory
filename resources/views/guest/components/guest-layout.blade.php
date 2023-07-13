<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            @if (isset($title))
            {{ $title }}
        @else
            {{ config('app.name') }}
        @endif

        </title>
        <link rel="stylesheet" href="/guest/CSS/nav.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>



       <header id="parent">

                       <nav id="navbar">
                            <h1 id="logo"> ALPHA <span>laboratory</span></h1>

                           <ul class="nav-links" >
                         <li ><a href="/" class="lin" >الرئيسية</a></li>
                         <li  id="analysis"><a href="#" class="lin"  >التحاليل</a>
                                <ul class="subList">
                                        <li><a href="the_result" class="lin">نتيجة التحليل</li>
                                        <li><a href="list_of_analysis" class="lin">قائمة التحاليل</li>
                                </ul>
                         </li>
                         <li ><a href="Branches" class="lin">فروعنا</a></li>
                         <li ><a href="https://mail.google.com/mail/?view=cm&fs=1&to=mohammed68559388adel@gmail.com" target="_blank" class="lin">تواصل معنا</a></li>
                          </ul>

                         <div class="burger">
                           <i class="fa-solid fa-bars" id="bars"></i>
                           </div>
                       </nav>

                       @if (isset($masterheader))
                       {{ $masterheader }}
                   @endif
        </header>

       {{ $slot }}


        <footer id="ft">
            <div class="footer-col">
                    <h4>
                            prodacts
                    </h4>
                    <ul class="foot">
                            <li class="footli"><a href="#">tempes</a></li>
                            <li class="footli"><a href="#">advertising</a></li>
                            <li class="footli"><a href="#">talent</a></li>
                    </ul>

            </div>
            <div class="footer-col">
                    <h4>
                            networke
                    </h4>
                    <ul class="foot">
                            <li class="footli"><a href="#">technologe</a></li>
                            <li class="footli"><a href="#">science</a></li>
                            <li class="footli"><a href="#">business</a></li>
                    </ul>

            </div>
            <div class="footer-col">
                    <h4>
                            company
                    </h4>
                    <ul class="foot">
                            <li class="footli"><a href="#">about</a></li>
                            <li class="footli"><a href="#">legal</a></li>
                            <li class="footli"><a href="#">contact us</a></li>
                    </ul>

            </div>
            <div class="footer-col">
                    <h4>
                            follow us
                    </h4>
                    <div class="links">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>

            </div>
            <div class="fp">
                    <p >© 2023 معامل ألفا للتحاليل الطبية. جميع الحقوق محفوظه</p>
            </div>
    </footer>
    <script src="/guest/java-script/jj.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>

</html>

