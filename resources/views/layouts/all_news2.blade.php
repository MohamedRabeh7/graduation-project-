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


                









                   <form action="{{url('all_news/')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <input type="hidden" name="_method" value="DELETE">
                   <table  border="1" cellpadding="1" cellspacing="1"><tr>
                    <td>#</td>
                    <td>Title</td>
                    <th>Add_by</th>
                    <th>Ststus</th>
                    <th>Action</th>
                   
                </tr>
            @foreach( $all_news as $ns )
                                   <tr>
                  
                    <td>{{$ns->id}}</td>
                    <td><a href="{{url('userid'.$ns->id)}}">{{$ns->title}}</a> </td>
                    <td>{{$ns->user_id()->first()->name}}</td>   
                    <td>{{$ns->status}}</td> 
                    <td>
                        <a href="{{url('delete/user'.$ns->user_id)}}">Deelete tis user</a>
                    </td> 
                   
                    </tr>
                    @endforeach
                </table>
               



                {!! $all_news->render()!!}

            <div>
            </div>
        </div>
        <div>
            <br>



                <form action="{{url('uploadfile')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <input type="file" name="file[]" id="file" multiple>
                    <input type="submit" value="submit"><br>
                </form>
                </div>


                

                <div>
                <form action="{{url('storagefile')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <textarea name="text" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="submit"><br>
                </form>
                </div>

   

        @dooney
        what you thing you are user 

       @else   
       just a duma not user

        @enddooney
            
                          
                          <input type="checkbox" name="id[]" value="{{}}">
                             </td><br>
                             <input type="submit"  name="Multibledelete" value="Multible Delete">
                <input type="submit" name="forcedelete" value="Forcedelete">




    </body>
</html>






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