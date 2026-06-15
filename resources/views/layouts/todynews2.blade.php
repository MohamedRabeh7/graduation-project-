<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      
        
        
            <div>
            <ul>
                @foreach($errors->all() as $ERRO)
               <li>
            {{$ERRO}} </li>
           </ul>
            @endforeach</div>
       
            <div class="content">
                <div class="title m-b-md">

                  <center>التعليقات</center> 




                  
                    <p>{{$ns->id}}</p>
                    <p><a href="{{url('userid'.$ns->id)}}">{{$ns->title}}</a> </p>
                    <p>{{$ns->user_id()->first()->first_name}}</p>   
                    <p>{{$ns->status}}</p> 
                    <p>
                        <a href="{{url('delete/user'.$ns->user_id)}}">Deelete tis user</a>
                    </p> 
                  

                
                   @foreach($ns->comment()->get() as $comment)
                    <p> Add_by : {{$comment->user_com->first_name}}</p> <br>  
                    <p> Comment : {{$comment->comment}}</p>   <br>
                   @endforeach


                  <div>
                <form action="{{url('comment'.$ns->id)}}" method="post" enctype="mlutipart/form-data">
                {!! csrf_field() !!}
            <CENter>Add Comment</CENter>
                   <textarea name="comment" id="" cols="30" rows="10"></textarea>

                        <input type="submit" value="submit"><br>
                  
                    <br>
                </form>
                </div>
                <br>                

         



    </body>
</html>
