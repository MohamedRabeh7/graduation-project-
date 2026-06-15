<?php
namespace App\Http\Controllers;
use view;
use Storage;
use Illuminate\Http\Request;
use App\Admin;
use App\news2;
use App\users;
use App\Commant1;
use File;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Dooney;

//use Illuminate\Support\Facades\Request;

class adminauth2 extends Controller
{




     // wiew data func
     public function all_news_send(Request $request){


        $all_news=news2::orderBy('id','desc')->paginate(5);
       // $all_news=news2::withTrashed()->orderBy('id','desc')->paginate(5);
        //$Trashed=news2::onlyTrashed()->orderBy('id','desc')->paginate(5);


        return view('layouts/all_news2',compact('all_news'));

    } 



    public function todynews($id){







        
        $ns=news2::with('user_id')->find($id);
       
     

       // $all_news=news2::withTrashed()->orderBy('id','desc')->paginate(5);
        //$Trashed=news2::onlyTrashed()->orderBy('id','desc')->paginate(5);


       return view('layouts/todynews2',compact('ns'));

    }


    //reseve data func
    public function all_news_post(Request $request){


       $data=$this->validate(request(),[
       
            'title'=>'required',
            'desc'=>'required',
            'content'=>'required',
            'status'=>'required',

       ],[],
       [
   
        'title'=>'the Title',
        'desc'=>'discreption',
        'content'=>'Content',
        'status'=>'Status'
       ]);
       
       $data['user_id'] = auth()->user()->id();
       news2::create($data);
        return redirect('all_news');
    }


    public function comment($news_id){
        $data =$this->validate( request() ,[
            'comment'=>'required'
        ]);
        $data['user_id'] = auth()->user()->id();
        $data['news_id'] = $news_id;
        
        Commant1::create($data);
        return back();
    }
        
 
   /*  
        $add= new news;

        $add->title=request('title');
        $add->discreption=request('discreption');
        $add->status=request('status');
        $add->add_by=request('add_by');
        $add->content=request('content');
        $add->save();

       




    }
*/
public function Deleteuser($id){
    $dellU =  users::find($id)->delete();
    return back();




}   


    //multi delete fun
    public function delete($id=null ){
        

        if($id != null){
        $dell =  news2::find($id);
        $dell->delete();
      
        news2::destroy(request('id'));
        }elseif(request()->has('id') and request()->has('restor')){
            news2::whereIn('id',request('id'))->restore();

        }elseif(request()->has('id') and request()->has('forcedelete')){
            news2::whereIn('id',request('id'))->forceDelete();

        }elseif(request()->has('id') and request()->has('Multibledelete')){
            news2::destroy(request('id'));
        }

        return redirect('all_news');
     }



// file upload show

     public function uploadfileget(){
        return view('all_news');
     }
// file upload run[ images ]
     public function uploadfile(){
        $naicname = [];
        $i =0;
        foreach(request()->file('file') as $file){
            $naicname ['file'.$i] = 'The fi('.($i+1).')';
            $i++;
        }
        $this->validate(request(),[
            'file.*'=>'required|image|mimes:png,jpg,jpeg,|max:2048',
        ],[],
            $naicname);

        $files=request()->file('file');
        foreach( $files as $file ){
            $fname= $file->getClientOriginalName();
            $fExtension= $file->getClientOriginalExtension();
            $fsize= $file->getSize();
            $mimtype= $file->getMimeType();
            $Realpath= $file->getRealPath();
            $file->move(public_path('upload'),'image_'.time().'.'.$fExtension);
        
        }
 
        return back();
        //       return view('all_news');*/
     }


     // file management (txt)
     public function storagefile(){
       // Storage::disk('local')->put(time().'fileText.txt',request('text'));
       //Storage::disk('local')->putFileAs('photos'.new file('newfolderDooney'),'photodooney.png');
      // return   Storage::disk('local')->get('mohi.txt');
      // return   Storage::disk('local')->size('mohi.txt');
      // return date('y-m-d h:i:s', Storage::disk('local')->lastModified('mohi.txt'));
      //Storage::disk('local')->prepend('mohi.txt',request('text'));
      //Storage::disk('local')->append('mohi.txt',request('text'));
      //Storage::disk('local')->copy('mohi.txt','newfolderDoonerfile/newNamefile.txt');
      Storage::disk('local')->move('mohi.txt','newfolderDoonerfile/newNamefile.txt');
    return request('text');
    
     

        
    // return Storage::lastModified('1772236031Textfile.txt');
     }
}