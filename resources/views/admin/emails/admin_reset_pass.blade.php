



@component('mail::message')


<div style="text-algin:center jusitify-content-center;">
<div style="margin:0 auto; withd:50%;">
Reset Password Account </div>
<br>
Wellcome  <br>




@component('mail::button', ['url' =>aurl('reset/password/'.$data['token'])])Click here to resend your password 
@endcomponent
Or
<br>Copy This Link

<a hreef="{{aurl('reset/password/'.$data['token']) }}">{{aurl('reset/password/'.$data['token'])}}</a>
<br>
Thanks,<br>
Karam
@endcomponent
