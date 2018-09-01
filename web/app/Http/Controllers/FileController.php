<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\File;

class FileController extends Controller
{
    //
    public function index(){
       $model = File::all();
       return view('pages.index',['files' => $model]);
    }
    public function uploadform(){
        return view('pages.upload');
    }

    public function upload(Request $req){
        $rule = [
            'name' => 'required',
            'version' => 'required',
            'file' => 'required'
        ];
        
        $validator = Validator::make($req->all(),$rule);
        if ($validator->passes()) {
            if(!empty(request()->file('file'))){
                $file = request()->file('file');
                $filename = $file->getClientOriginalName();
                Storage::disk('upload')->put($filename, file_get_contents($file));

                $model = new File;
                $model->name = $req->name;
                $model->version = $req->version;
                $model->link = $filename;

                if($model->save()){
                    return redirect('/');
                }
                
            }
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function delete($id){
        $model = File::where('id', $id)->first();
        try{
            Storage::disk('upload')->delete($model->link);
        }catch(Exception $e){
            echo $e;
        }
        if(File::find($model->id)->delete())
            return redirect("/");
    }

    public function download($id){
        $model = File::where('id', $id)->first();
        try{
            $path = storage_path('uploads/'.$model->link);
            //dd($path);
            return response()->download($path);
        }catch(Exception $e){
            echo $e;
        }

    }

    public function testFile(){
        $files = File::all();
        foreach ($files as $file) {
            echo $file->name;
        }
    }
}
