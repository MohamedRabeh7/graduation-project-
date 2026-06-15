<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

<title>Novels </title>
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

  <title>Novels</title>
</head>

<body>
    <section class="py-5" id="books">
    <div class="container-fluid">
      <div class="row g-3">




           <div class="col-md-3">
          <div class="card book-card">

              <img src="/gallery/Novels/8.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
                <h4 class="card-title text-info">  رواية ايكادولي </h4>
                <p class="card-text text-center">حاول أن تتقبل بعض الأشياء كما هي، لا تسأل الا عمّا يفيدك
                    ، أمّا ما لا يعنيك ولا يفيدك فلا تيع وقتك بالركض خلفه"
                 "قد نفتش عن الماضي لبشاعة حاضرنا.. وما ابشع ما نعيشه الآن!".</p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>


       
            <div class="col-md-3">
          <div class="card book-card">
              <img src="/gallery/Novels/10.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
                <h4 class="card-title text-info">  رواية ارض زيكولا </h4>
                <p class="card-text">"اقسمت الا احب ،لكنك اتيت لتكسري قسمي".</p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        

            <div class="col-md-3">
          <div class="card book-card">
              <img src="/gallery/Novels/9.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
                <h4 class="card-title text-info">  رواية قواعد جارتين </h4>
                <p class="card-text">صدق القائل بأن هناك لحظة ما لا تعود الحياة بعدها كما كانت قبلها أبدًا." </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
         
        
        
        
        
            <div class="col-md-3">
          <div class="card book-card">
              <img src="/gallery/Novels/4.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
                <h4 class="card-title text-info">  الف شمس ساطعة </h4>
                <p class="card-text">
                  
                  "الحب مثل الزهرة، يزدهر في الصيف ويذبل في الشتاء."
- "الخوف مثل الظل، يتبعنا أينما ذهبنا."
- "الحياة مثل القصيدة، لها بداية ووسط ونهاية."
- "الأمل مثل الشمعة، يضيء في الظلام."
- "الألم مثل النار، يحرق ويترك أثرًا."

                </p>
                <a href="#" class="btn btn-info">إقرا المزيد</a></div>
                </div>
            </div>
          
        
        
            <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/1.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info"> ولنا في الحلال لقاء       </h4>
              <p class="card-text">
                 "الحلال وحده من يمنح قلوبنا الأمان."
 - "تعاهدنا أن ننتظر، حتى لا يكون لقاؤنا إلا برضا الله."
 - "بعض اللقاءات لا تحدث صدفة، بل دعوات خبأناها طويلًا في قلوبنا."
                
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>
      
     
        
        
        
        
        <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/7.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info"> انت لي    </h4>
              <p class="card-text"> إنّ شمساً تشرق وتغرب دون أن تريني إياها، هي ليست شمساً..
               وإنّ قمراً يسهر في كبد السماء دون أن يعكس صورتها.. هو ليس قمراً
                
                
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>
       
     
     
     
        <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/3.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info">   أنا قبل كل شيء </h4>
              <p class="card-text">
                
                "لا أحد يمكنه أن يحدد من أنا، إلا أنا."
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>

        
        
        
        
        <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/2.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info">   البؤساء    </h4>
              <p class="card-text">
                "أعظم سعادة في الحياة هي أن نكون محبوبين، محبوبين لذاتنا، أو بالأحرى محبوبين رغم أنفسنا."
                
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>
      
        
        
        
        
        <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/6.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info">   فلتغفري   </h4>
              <p class="card-text">
                "الغفران هو أن تترك الماضي وراءك وتمضي قدمًا."
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>
 
        
        
        
        
        
        <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/12.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info">   فيتامين الحب    </h4>
              <p class="card-text">
                أنت شمسي، قمري، ونجومي."
- "أحبّك أكثر من الكلمات التي يمكنني قولها."
                
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>

            </div>
        </div>

            
            
          <div class="col-md-3">
          <div class="card book-card">
            <img src="/gallery/Novels/11.jpeg" alt="book" class="card-img-top">
            <div class="card-body ">
              <h4 class="card-title text-info">   أحببت وغدآ   </h4>
              <p class="card-text">
                "أحببتك رغم كل شيء، وسأحبك إلى الأبد."
              </p>
              <a href="#" class="btn btn-info">إقرا المزيد</a>
            </div>
          </div>
        </div>

        </div>
        </div>
    </section>




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
<div class="">
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