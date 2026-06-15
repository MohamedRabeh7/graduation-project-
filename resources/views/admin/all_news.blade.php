<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Karam</title>
            <div class="content">
                <div class="title m-b-md">
                   المنشورات اليوم 
                   <div> <table  border="1" cellpadding="1" cellspacing="1"><tr>
                       <th>Add_by</th>
                       <th>Email</th>
                      <th>Content</th>
                </tr>
                <form action="{{ aurl('all_news/')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <input type="hidden" name="_method" value="DELETE">
                @foreach($post as $news)
                <tr>
                    <td>{{$news->content}}</td> 
                    <td>{{$news->user()->name}}</td> 
                    
                        <td>  
                     <input type="checkbox" name="id[]" value="{{ $news->id}}">
                        </td><br>
                    </tr>
                    @endforeach
                </table>
                <input type="submit"  name="Multibledelete" value="Multible Delete">
            <div>
            </div>
        </div>
    </body>

         
            
            </div>
                </div>

            </div>
        
       
    </body>
</html>
