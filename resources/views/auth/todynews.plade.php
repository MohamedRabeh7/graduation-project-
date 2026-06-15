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

                  <div>
                <form action="{{url('all_news')}}" method="post" enctype="mlutipart/form-data">
                {!! csrf_field() !!}
                    <input type="text" name="title" placeholder="Title"  value="{{old('title')}}"><br>
                    <input type="text" name="desc" placeholder="Description "  value="{{old('desc')}}"><br>
                    <textarea name="content" placeholder="Content" value="{{old('Content')}}" ></textarea><br>
                    <select name="status" id="">
                                                    <option value="">Choose one</option>
                                                    <option value="active">active</option>
                            <option value="pended">pended</option>
                            <option value="deactive">deactive</option>
                        </select>
                        <br>

                        <input type="submit" value="submit"><br>
                  
                    <br>
                </form>
                </div>
                <br>                


                  
                    <p>{{$ns->id}}</p>
                    <p><a href="{{url('tody/news'.$ns->)}}">{{$ns->title}}<</a> </p>
                    <p>{{$ns->user_id}}</p>   
                    <p>{{$ns->status}}</p> 
                    
         



    </body>
</html>












            