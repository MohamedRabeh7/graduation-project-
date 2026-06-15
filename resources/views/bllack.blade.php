@component('mail::message')


<div style="text-algin:center jusitify-content-center;">
<div style="margin:0 auto; withd:50%;">
Verify Account </div>
<br>
Wellcome <br>




@component('mail::button', ['url' =>aurl('verfiy_email'.$user->verifyToken)])Click here to resend your password 
@endcomponent
Or
<br>Copy This Link

<a hreef="{{aurl('verfiy_email'.$user->verifyToken)}}">{{aurl('verfiy_email'.$user->verifyToken)}}</a>
<br>

Thanks,<br>
Karam
@endcomponent
