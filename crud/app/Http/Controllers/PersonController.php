<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonController extends Controller
{
    public function index()
    {
        
        $person = DB::table('Person_003')->get();
        return view('index', ['person' => $person]);
    }


    public function create(Request $request)
    {
        
        $person = DB::table('Person_003')->insert([
            'Nama' => $request->Nama,
            'Gender' => $request->Gender,
            'KotaLahir' => $request->KotaLahir,
            'TanggalLahir' => $request->TanggalLahir,
            'Alamat' => $request->Alamat,
            'Kota' => $request->Kota,
            'IsActive' => 1
        ]);

        return redirect('/');
    }


    public function ajax(Request $request){
        $person = DB::table('Person_003')->where('IDPerson',$request->id)->first();
        return view('ajax', ['person' => $person]);
    }


    public function status($id)
    {   
        $statusNow = DB::table('Person_003')->select('IsActive')->where('IDPerson',$id)->value('IsActive');
        $update = DB::table('Person_003')->where('IDPerson',$id)->update([
            'IsActive' => $statusNow ^ 1
        ]);
        return redirect('/');
    }




    public function update(Request $request){
        $update = DB::table('Person_003')->where('IDPerson',$request->IDPerson)->update([
            'Nama' => $request->Nama,
            'Gender' => $request->Gender,
            'KotaLahir' => $request->KotaLahir,
            'TanggalLahir' => $request->TanggalLahir,
            'Alamat' => $request->Alamat,
            'Kota' => $request->Kota
        ]);
        return redirect('/');
    }



    public function detail(Request $request){
        $person = DB::table('Person_003')->where('IDPerson',$request->id)->first();
        return view('detail', ['person' => $person]);
    }



    public function upload(Request $request){
		$this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'person' => 'required'
		]);
        $file = $request->file('file');
        $tujuan_upload = 'images';
        
        
        if(file_exists("images/".$file->getClientOriginalName())){
            unlink("images/".$file->getClientOriginalName());
        }
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $update = DB::table('Person_003')->where('IDPerson',$request->person)->update([
            'image' => $file->getClientOriginalName()
        ]);
	}

}