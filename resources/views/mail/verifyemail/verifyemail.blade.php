@component('mail::message')
# Introduction


Wellcome   {{auth?()->user()->name}}<br>
Verify your Email

@component('mail::button', ['url' =>aurl('verfiy_email'.$user->verifyToken)])Click here to verfiy Email 
@endcomponent

Or
<br>Copy This Link

<a href="{{aurl('verfiy/email/'.$user->verifyToken)}}">{{aurl('verfiyemail'.$user->verifyToken)}}</a>
<br>
Thanks
,<br>
Karam
@endcomponent


