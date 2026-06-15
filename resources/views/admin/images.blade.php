<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

<title>Images </title>
</head>
<body><html lang="ar" dir="rtl">
<style>

body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
line-height: 1.6;
}

.navbar-brand {
font-weight: bold;
font-size: 1.8rem;
}



footer {
background-color: #1a1a1a;
color: white;
}

.social-icons a {
color: white;
font-size: 1.5rem;
margin-left: 15px;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-info me-2" href="#">كرم</a>

<form class="d-flex me-4 ">
{!! csrf_field() !!}
        <input class="form-control " type="search" placeholder="ابحث...">
            <button class="btn btn-outline-primary" type="submit">
                <i class="fa fa-search"></i>
            </button>
     
</form>
<button class="navbar-toggler" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#navbarNav"
aria-label=" Dooney_nav"
aria-controls="navbarNav"
aria-expanded="false"
>
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item active">
<a class="nav-link active"   href="{{ aurl('/') }}">الرئيسية</a>
</li>

<li  class="nav-item active">
                                        <a  class="nav-link active"  href="{{ aurl('books') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('books-form').submit();">
                                            الكتب
                                        </a>
      <form id="books-form" action="{{ aurl('books') }}" >
                                            {{ csrf_field() }}
                                        </form>
                                        </li>


                                       


                                        <li  class="nav-item active">
                                        <a  class="nav-link active"  href="{{ aurl('novels') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('novels-form').submit();">
                                            الروايات
                                        </a>
      <form id="novels-form" action="{{ aurl('novels') }}">
                                            {{ csrf_field() }}
                                        </form></li> 



                                        <li  class="nav-item active">
                                        <a  class="nav-link active"  href="{{ aurl('images') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('images-form').submit();">
                                            الصور
                                        </a>
      <form id="images-form" action="{{ aurl('images')}}" method="post">
                                            {{ csrf_field() }}
                                        </form></li>









              
                                        <li class="nav-item active ">
<a class="nav-link active" href="#" id="showAlert">من نحن</a>

                                        <div class="alert alert-info  dismissible fade show d-none position-fixed top-0 start-0 w-100" roll="alert" id="myAlert">
                                          <h4 class="alert-heading"> من نحن</h4>
                                          <p>مكتبة كرم هي مكتبة متخصصة في الكتب الثقافية والروايات الادبية وكل ما يتعلق بالكتب من صور واقتباسات وغيرها .
                  قام بتصميم هذه المكتبة كل من إكرام ادم ومحمد رابح.</p>        
                                        <button class="btn-close" data-bs-dismiss="alert" aria-lable="Close"  type="button"></button>
                                        </div>
</li>

  


<li class="nav-item active">
<a class="nav-link active" href="{{ aurl('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل خروج
                                        </a>
                                        <form id="logout-form" action="{{ aurl('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                      
 
 
                      
    </ul>
  </li>
  </li>
</div>
</div>
</nav>


  <h2 class="text-center mb-4">الصور</h2>
    <section class="gallery ">
    <div class="container">
      <div class="row g-3">


        <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/1.jpg" alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/1.jpg" alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/1.jpg" alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/1.jpg" alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/2.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/3.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2 "></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/4.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>

          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/5.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/6.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/7.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/8.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/9.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/10.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/11.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/12.jpeg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/13.jpeg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/14.jpeg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/15.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/16.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/17.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/18.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/19.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/20.jpg"alt="gallery"class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/21.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/22.jpg" class="img-thumbinal image-fluid border border-2 border-primary p-2" alt="gallery" >
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/23.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/24.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/25.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/26.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/27.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/28.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/29.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/30.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/31.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/32.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/33.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/34.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/35.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/36.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/37.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/38.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/39.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/40.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/41.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/42.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/43.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/44.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/45.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/46.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/47.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/48.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/49.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/50.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/51.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/52.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/53.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/54.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/55.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/56.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/57.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/58.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/59.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/60.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/61.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/62.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/63.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/64.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/65.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/66.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div>
          <dev class="col-md-3">
          <div class="card bg-transparent border-0">
          <img src="/image/67.jpg"alt="gallery" class="image-fluid border border-2 border-primary p-2"></div></div></div></div>
         
       </div> 
    </div>
    
    
    </section>
    
    <div class="modal fade" id="gallery-modal" tabindex="-1"
    aria-labelledby="examplemodallable" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="/image/1.jpg"alt="modal img"class="modal-img"> </div>
    </div>
  </div>
</div>
  
<!-- الفوتر -->
<!-- الفوتر -->
<footer class="py-4">
<div class="container">
<div class="row">
<div class="col-md-4 mb-4 mb-md-0">
<h4 class="mb-3">كرم</h4>
<p>مكتبة كرم هي وجهتك الأولى للحصول على أفضل الكتب والروايات وأحدث الصور في العالم العربي.</p>
<div class="social-icons">
<a href="#"><i class="fa-brands fa-facebook"></i></a>
<a href="#"><i class="fa-brands fa-twitter"></i></a>
<a href="#"><i class="fa-brands fa-instagram"></i></a>
<a href="#"><i class="fa-brands fa-linkedin"></i></a>
</div>







</div>
<div class="col-md-2 mb-4 mb-md-0">
<h5 class="mb-3">روابط سريعة</h5>
<ul class="list-unstyled">
<li><a href="#" class="text-light text-decoration-none">الرئيسية</a></li>

<li><a href="books.html" class="text-light text-decoration-none">الكتب</a></li>
<li><a href="novels.html" class="text-light text-decoration-none">الروايات</a></li>
<li><a href="#" class="text-light text-decoration-none">من نحن</a></li>
    </div>
   </div>
</div>
</div>
  
   </a></li>
</ul>
</div>
<div class="col-md-3 mb-4 mb-md-0">
<h5 class="mb-3">خدماتنا</h5>
<ul class="list-unstyled">
<li><a href="#" class="text-light text-decoration-none">التوصيل المجاني</a></li>
<li><a href="#" class="text-light text-decoration-none">الاستبدال والاسترجاع</a></li>
<li><a href="#" class="text-light text-decoration-none">الهدايا والقسائم</a></li>
<li><a href="#" class="text-light text-decoration-none">الطلبات بالجملة</a></li>
</ul>
</div>
<div class="col-md-3">
<h5 class="mb-3">طرق الدفع</h5>
<div class="d-flex">
<i class="fab fa-google-pay fs-3 me-2"></i>
<i class="fab fa-paypal fs-3 me-2"></i>
<i class="fab fa-cc-mastercard fs-3  me-2"></i>
</div>




</div>
</div>
<hr class="my-4">
<div class="text-center">
<p class="mb-0">© 2023 كرم للكتب والروايات. جميع الحقوق محفوظة.</p>
</div>
</div>
</footer>



<script> document.getElementById('showAlert').addEventListener('click',function(){
  document.getElementById('myAlert').classList.remove('d-none');
});
</script>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
</body>
</html>