@component('mail::message')


<div style="text-algin:center jusitify-content-center;">
<div style="margin:0 auto; withd:50%;">

verfiy Email </div>
<br>
Wellcome   <br>


 <br>

@component('mail::button', ['url' =>aurl('verfiy_email'.$user->verifyToken)])Click here to verfiy Email 
@endcomponent
Or
<br>Copy This Link

<a href="{{aurl('verfiy_email'.$user->verifyToken)}}"></a>
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
