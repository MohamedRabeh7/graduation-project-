<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

<title>Gallery </title>
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

  <title>books</title>
</head>

<body>


<section id="books" class="py-5">
<div class="container">
<h2 class="section-title">الكتب  </h2>
<div class="row g-3">
                <div class="col-md-3 ">
          <div class="card book-card  h-25">
              <img src="/gallery/books/14.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   عقدك النفسية سجنك الابدي </h4>
                <p class="card-text text-wrap">إذا كنت غير مستعد لمواجهة واقعك , وإذا كنت تهرب من نفسك وتتجنب مواجهة ذاتك فهذا الكتاب ليس لك ! فهذا الكتاب يتضمن العديد من الأمور و الحقائق التي ستصدمك والتي اعتقدت أنها جزء من مسلمات الحياة، فلهذا الكتاب العديد من الأمور الجريئة والواقعية في مجتمعاتنا العربية التي لم يتم التطرق لها بشكل مفصل بالسابق وسيكون كفيل بإحداث نوبة وعي لديك .. </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
          
        
        
          <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/9.jpeg"alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info"> كوني صحابية </h4>
                   <p class="card-text text-wrap">لكل مرحلة جمالها ولكل خطوة نجاحاتها.."
                
"كلها مساحات في القلب ،والقليل فقط يحتل مساحة لاتنسى!" </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
    
        
          <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/18.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   جلسات نفسية </h4>
                <p class="card-text text-wrap">نتعلم في حياتنا كيفية التعامل مع كل شيء، مِن الدراسة للعمل والعلاقات، ولكن لا نُحسن التعامل مع أنفسنا." </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
          <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/15.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   فاتتني صلاة  </h4>
                <p class="card-text text-wrap">«في هذا العالم نحن ننتظر أمرًا من السّماء حتى تستقيم حياتنا، نعتقد أن حالنا سيتبدّل في -يومٍ ما- وسنصبح من المصلّين»</p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
       
        
          <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/8.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info"> اغني رجل في بابل   </h4>
                <p class="card-text text-wrap">"الجزء الذي توفره هو البداية التي تصنع منها ثروتك.". </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
             <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/1.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">  ليالي بيضاء
                </h4>
                <p class="card-text text-wrap">
                  "أحياناً يمرُّ الإنسان بأوقات غريبة... يختلط فيها الحلم بالواقع، وتتداخل المشاعر حتى لا تعرف أين تنتهي الذات وأين يبدأ العالم."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
             <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/2.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   رسائل من القرآن 
                </h4>
                <p class="card-text text-wrap">
                  "كل آية هي رسالة موجهة لك، لتقرأها كما لو نزلت الآن."
* "الله يخاطبك في القرآن، ليس فقط البشرية جمعاء."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/3.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">
               الرجال من المريخ والنساء من الزهرة   
                </h4>
                <p class="card-text text-wrap">
                   "الرجال يشعرون بالحب عندما يشعرون بالحاجة، والنساء يشعرن بالحاجة عندما يشعرن بالحب."
 * "الرجل يريد الحلول، والمرأة تريد التفهم."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
          
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/4.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   فن اللامبالاة 
                </h4>
                <p class="card-text text-wrap">
                  اللامبالاة ليست عدم الاهتمام، بل هي الاهتمام بالشيء الصحيح."
- "لا تكن خائفًا من الفشل، كن خائفًا من عدم المحاولة."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
          
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/5.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   ليطمئن قلبي 
                </h4>
                <p class="card-text text-wrap">
                  "الطمأنينة لا تأتي من انعدام المشاكل، بل من حضور الله وسط العاصفة."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
       
        
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/6.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   الي المنكسرة قلوبهم 
                </h4>
                <p class="card-text text-wrap">
                 "الانكسار ليس نهاية القصة، بل هو المكان الذي يمكن للضوء أن يدخل منه." 
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
        
        
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/7.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   عندما التقيت عمر بن الخطاب
                </h4>
                <p class="card-text text-wrap">
                  "لم تكن قوة عمر في سيفه، بل في عدالته التي جعلت السيف يخشاه."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/10.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   ألأب الغني والأب الفقير 
                </h4>
                <p class="card-text text-wrap">
                  "لا تعمل لأجل المال، بل اجعل المال يعمل لأجلك."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/12.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   قوة عقلك الباطن
                </h4>
                <p class="card-text text-wrap">
                "العقل الباطن لا يجادل، إنه ينفذ. فهو يقبل ما تكرره عليه بإيمان."  
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/13.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   مميز بالأصفر
                </h4>
                <p class="card-text text-wrap">
                  "كن كريمًا مع الآخرين، فالكرم هو مصدر السعادة."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/16.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   محاط بالحمقى
                </h4>
                <p class="card-text text-wrap">
                  "عندما تعرف نمط شخصية من أمامك، تعرف اللغة التي يفهمها."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/19.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   قوة التفكير الإيجابي 
                </h4>
                <p class="card-text text-wrap">
                  "تغير أفكارك تتغير حياتك."
* "المشكلة ليست في وجود المشاكل، بل في طريقة تفكيرك فيها."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
       
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/20.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   العادات الزرية
                </h4>
                <p class="card-text text-wrap">
                   "لا تهتم بالنتيجة، بل اهتم بالنظام الذي يولد النتائج."
 * "التغيير الحقيقي ليس حدثًا دراميًا، بل هو نتاج مئات القرارات الصغيرة اليومية."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/21.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">  وتلك الأيام 
                </h4>
                <p class="card-text text-wrap">
                  "التاريخ لا يعيد نفسه، لكن الإنسان يعيد أخطاءه."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
               <div class="col-md-3">
          <div class="card book-card">
          
              <img src="/gallery/books/23.jpeg" alt="book" class="card-img-top">
           <div class="card-body">
                <h4 class="card-title text-info">   معجزات الصباح
                </h4>
                <p class="card-text text-wrap">
                  "طريقة بداية يومك تحدد غالباً مدى نجاحك فيه."
                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
          
    </section></form>

    
</section>




<script>
  document.getElementById('openModal').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));
    myModal.show();
  });
</script>



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


<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
<script> document.getElementById('showAlert').addEventListener('click',function(){
  document.getElementById('myAlert').classList.remove('d-none');
})

</script>
</body>
</html>