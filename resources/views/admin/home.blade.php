<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="all.min.css" rel="stylesheet">

<title>مكتبة _ كرم  </title>
</head>
<body><html lang="ar" dir="rtl">
<style>
:root {
--primary-color: skyblue;
--secondary-color: #e6e2d3;
--accent-color: #d64161;
}

body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
line-height: 1.6;
}

.navbar-brand {
font-weight: bold;
font-size: 1.8rem;
}

.hero-section {
background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('gallery/l1.jpeg');
background-size: cover;
background-position: center;
color: white;
padding: 100px 0;
}

.section-title {
position: relative;
margin-bottom: 2rem;
padding-bottom: 0.5rem;
}

.section-title::after {
content: '';
position: absolute;
bottom: 0;
right: 0;
width: 80px;
height: 3px;
background-color: var(--primary-color);
}

.book-card {
transition: transform 0.3s;
height: 100%;
}

.book-card:hover {
transform: translateY(-5px);
box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.category-card {
background-color: var(--secondary-color);
border-radius: 10px;
padding: 20px;
text-align: center;
transition: all 0.3s;
height: 100%;
}

.category-card:hover {
background-color: var(--primary-color);
color: white;
}

.category-icon {
font-size: 2.5rem;
margin-bottom: 1rem;
}

.newsletter-section {
background-color: var(--primary-color);
color: white;
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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top position relative ">
  <div class="container-fluid">
    <a class="navbar-brand text-info me-2" href="#">كرم</a>

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


    

 

<button type="submit" class="btn btn-info me-2 " href="{{ aurl('register') }}"
    onclick="event.preventDefault();
                document.getElementById('register-form').submit();">
    تسجيل عضوية

</button>
<form id="register-form" action="{{ aurl('register') }}" >
    {{ csrf_field() }}
</form>




  <button type="submit" class="btn btn-info me-2"   href="{{ aurl('login') }}"
  onclick="event.preventDefault();
     document.getElementById('login-form').submit();">
                                            
تسجيل دخول 

</button>

<form id="login-form" action="{{ aurl('login') }}" method="POST">
    {{ csrf_field() }}
</form></li>




</div></div></nav>





<section class="hero-section text-center">
<div class="container">
<h1 class="display-4 fw-bold mb-4">مرحباً بكم في مكتبةكرم</h1>
<p class="lead mb-4">اكتشف عالم المعرفة مع آلاف الكتب والمواد القرائية المتنوعة</p>
<a href="#"class="btn btn-primary btn-lg">استكشف الكتب</a>

</div>
</section>

<section id="books" class="py-5">
<div class="container">
<h2 class="section-title">كتب مميزة</h2>
<div class="row g-4">

<div class="col-md-6 col-lg-3">
<div class="card book-card">
<img src="gallery/Novels/2.jpeg" class="card-img-top" alt="رواية">
<div class="card-body">
<h5 class="card-title">رواية البؤساء</h5>
<p class="card-text">رواية "البؤساء" للكاتب فيكتور هوجو، تتبع حياة جان فالجان، سجين سابق يعاني من الظلم والاضطهاد، ويتغير تحت تأثير الحب والكرم، ويواجه الصعاب في سبيل تحقيق العدالة والسعادة.</p>
<div class="d-flex justify-content-between align-items-center">
<span class="fw-bold text-primary">45 ر.س</span>
<a href="#" class="btn btn-sm btn-outline-primary">أضف للسلة</a>
</div>
</div>

</div>
</div>


<div class="col-md-6 col-lg-3">
<div class="card book-card">
<img src="gallery/books/19.jpeg" class="card-img-top" alt="كتاب">
<div class="card-body">
<h5 class="card-title">قوة التفكير الإيجابي</h5>
<p class="card-text">كتاب يساعدك على تغيير طريقة تفكيرك لتحقيق النجاح والسعادة.</p>
<div class="d-flex justify-content-between align-items-center">
<span class="fw-bold text-primary">35 ج.س</span>
<a href="#" class="btn btn-sm btn-outline-primary">أضف للسلة</a>
</div>
</div>
</div>
</div>


<div class="col-md-6 col-lg-3">
<div class="card book-card">
<img src="gallery/books/20.jpeg" class="card-img-top" alt="كتاب">
<div class="card-body">
<h5 class="card-title">العادات الذرية</h5>
<p class="card-text">دليل عملي لبناء عادات جيدة والتخلص من العادات السيئة.</p>
<div class="d-flex justify-content-between align-items-center">
<span class="fw-bold text-primary">40 ج.س</span>
<a href="#" class="btn btn-sm btn-outline-primary">أضف للسلة</a>
</div>
</div>
</div>
</div>


<div class="col-md-6 col-lg-3">
<div class="card book-card">
<img src="gallery/books/4.jpeg" class="card-img-top" alt="كتاب">
<div class="card-body">
<h5 class="card-title">فن اللامبالاة</h5>
<p class="card-text">كتاب يتحدى المفاهيم التقليدية حول السعادة والنجاح.</p>
<div class="d-flex justify-content-between align-items-center">
<span class="fw-bold text-primary">38 ج.س</span>
<a href="#" class="btn btn-sm btn-outline-primary">أضف للسلة</a>
</div>
</div>
</div>
</div>
</div>




<div class="text-center mt-4">
                                        <a    href="{{ aurl('books') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('allbooks-form').submit();">
                                         عرض جميع الكتب
                                        </a> </div>
</div>
      <form id="allbooks-form" action="{{ aurl('books') }}" >
                                            {{ csrf_field() }}
                                        </form>
                                        </li>









</section>


<section id="categories" class="py-5 bg-light">
<div class="container">
<h2 class="section-title">التصنيفات</h2>
<div class="row g-4">
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-file-alt"></i>
</div>
<h4>الروايات</h4>
<p>استكشف مجموعة واسعة من الروايات العربية والعالمية</p>
</div>
</div>
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-lightbulb"></i>
</div>
<h4>تطوير الذات</h4>
<p>كتب تساعدك على تطوير مهاراتك وتحقيق أهدافك</p>
</div>
</div>
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-university"></i>
</div>
<h4>التعليمية</h4>
<p>كتب تعليمية ومناهج دراسية لجميع المراحل</p>
</div>
</div>
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-heart"></i>
</div>
<h4>العلاقات والأسرة</h4>
<p>كتب عن العلاقات الأسرية والزوجية والتربية</p>
</div>
</div>
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-money-bill"></i>
</div>
<h4>الأعمال والاقتصاد</h4>
<p>كتب في الإدارة والاقتصاد والاستثمار</p>
</div>
</div>
<div class="col-md-4">
<div class="category-card">
<div class="category-icon">
<i class="fa fa-image"></i>
</div>
<h4>  الصور 
</h4>
<p> استكشف مجموعة واسعة من الصور  </p>
</div>
</div>


</section>

<section id="about" class="py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<h2 class="section-title">من نحن</h2>
<p>مكتبةكرم هي وجهتك الأولى للحصول على أفضل الكتب والمواد القرائية. نحن نؤمن بقوة المعرفة ودورها في تغيير حياة الأفراد والمجتمعات.</p>
<p>تأسست مكتبتنا عام 2025 بهدف نشر الثقافة ودعم القراءة في المجتمع العربي. نحن نقدم مجموعة واسعة من الكتب في مختلف المجالات، من الروايات والأدب إلى الكتب العلمية والتطويرية.</p>
<p>نحن نسعى دائماً لتقديم أفضل الخدمات لعملائنا، مع ضمان جودة الكتب وسهولة الوصول إليها.</p>
<a href="#" class="btn btn-primary">اعرف المزيد عنا</a>
</div>
<div class="col-md-6">
<img src="gallery/l2.jpeg" class="img-fluid rounded" alt="مكتبةكرم">
</div>
</div>
</div>
</section>

<section class="newsletter-section py-5">
<div class="container text-center">
<h2 class="mb-4">اشترك في نشرتنا البريدية</h2>
<p class="mb-4">ابق على اطلاع بآخر الإصدارات والعروض الخاصة</p>
<div class="row justify-content-center">
<div class="col-md-6">
<form>
<div class="input-group mb-3">
<input type="email" class="form-control   @error('email') is-invalid @enderror"   name="email" placeholder="بريدك الإلكتروني" aria-label="البريد الإلكتروني">
<button class="btn btn-light " type="submit">اشتراك</button>
</div>
</form>
</div>
</div>
</div>
</section>

<section id="contact" class="py-5">
<div class="container">
<h2 class="section-title">إترك تعليق </h2>
<div class="row">
  
<div class="col-md-6">
<form action="{{aurl('all_news')}}"> 
        {!!csrf_field()!!}


        
<div class="mb-3">
<label for="first_name" class="form-label">الاسم</label>
<input type="text" class="form-control" name="first_name" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">البريد الإلكتروني</label>
<input type="email" class="form-control  @error('email') is-invalid @enderror"  name="email" required>
</div>
<div class="mb-3">
<label for="message" class="form-label">التعليق</label>
<textarea class="form-control"  name="content" rows="5" required></textarea>
</div>
<button type="submit" id="myButton" class="btn btn-primary">إرسال</button>
</form>
</div>

<div class="col-md-6">
<div class="mt-4 mt-md-0">
<h4>معلومات الاتصال</h4>
<ul class="list-unstyled">
<li class="mb-2">
<i class="bi bi-map-marker-alt me-2"></i>
العنوان: الخرطوم ، بحري،   السودان
</li>
<li class="mb-2">
<i class="fa fi-telephone me-2"></i>
الهاتف: 0908285879
</li>
<li class="mb-2">
<i class="fa fa-envelope me-2"></i>
البريد الإلكتروني: mohamedrabeh197@gmail.com.com
</li>
<li class="mb-2">
<i class="fa fa-clock me-2"></i>
أوقات العمل: من السبت إلى الخميس، 9 صباحاً - 10 مساءً
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<!-- الفوتر -->
<!-- الفوتر -->
<footer class="py-4">
<div class="container">
<div class="row">
<div class="col-md-4 mb-4 mb-md-0">
<h4 class="mb-3">كرم</h4>
<p>مكتبةكرم هي وجهتك الأولى للحصول على أفضل الكتب والروايات وأحدث الصور في العالم العربي.</p>
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
<p class="mb-0">© 2023كرم للكتب والروايات. جميع الحقوق محفوظة.</p>
</div>
</div>
</footer>



<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
<script> document.getElementById('showAlert').addEventListener('click',function(){
  document.getElementById('myAlert').classList.remove('d-none');
})

</script>
</body>
</html>