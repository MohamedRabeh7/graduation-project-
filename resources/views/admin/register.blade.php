<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

<title>Register </title>
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

.btn-sky-blue {
    background-color: #87CEEB;
    border-color: #87CEEB;
    color: white;
}
.btn-sky-blue:hover {
    background-color: #6cb8d6;
    border-color: #6cb8d6;
}

</style>
</head>
<body>

  <title>register</title>
</head>
<body>
    @if($errors->any())
    <div style="color:red">
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif 
    




<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-sky-blue text-center">
                <h4 class="mb-0 text-info">تسجيل عضو جديد</h4>
            </div>
             <div class="card-body">
            
                
      <form   action="{{ aurl('registeration') }}" method="POST" >
                                            {{ csrf_field() }}

                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label ">الاسم</label>
                                <input type="text" class="form-control  btn btn-outline-primary @error('first_name') is-invalid @enderror" 
                                       id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                              
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">اسم العائلة</label>
                                <input type="text" class="form-control  btn btn-outline-primary @error('last_name') is-invalid @enderror" 
                                       id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                               
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">تاريخ الميلاد</label>
                                <input type="date" class="form-control btn btn-outline-primary  @error('date_of_birth') is-invalid @enderror" 
                                       id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="age" class="form-label">العمر</label>
                                <input type="number" class="form-control btn btn-outline-primary  @error('age') is-invalid @enderror" 
                                       id="age" name="age" value="{{ old('age') }}" required>
                                
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">الجنس</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" 
                                       value="male" {{ old('gender') == 'male' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="male">ذكر</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" 
                                       value="female" {{ old('gender') == 'female' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="female">أنثى</label>
                            </div>
                        </div>
                       
                    <div class="mb-3">
                        <label for="mobile" class="form-label">رقم الهاتف</label>
                        <input type="tel" class="form-control  btn btn-outline-primary  @error('mobile') is-invalid @enderror" 
                               id="mobile" name="mobile" value="{{ old('mobile') }}" required>
                        
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control  btn btn-outline-primary  @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}" required>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">كلمة المرور</label>
                                <input type="password" class="form-control   btn btn-outline-primary    @error('password') is-invalid @enderror" 
                                       id="password" name="password" required>
                                       </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                                <input type="password" class="form-control  btn btn-outline-primary"
                                       id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sky-blue w-100">تسجيل</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</head>
</html>