<?php
namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
class ProfileController extends Controller
{

    public function __construct(Profile $profile, Request $request)
    {
        $this->profile = $profile;
        $this->request = $request;
    }

    public function profile()
    {
        $exps = Profile::where('jenis', 'Pengalaman')
                        ->orderBy('akhir','desc')
                        ->get();
        $edus = Profile::where('jenis', 'Pendidikan')
                        ->orderBy('akhir','desc')
                        ->get();
        $datas = [$exps,$edus];
        return view('layouts/public/profile',compact('datas'));
    }
    public function daftarprofile()
    {
        $profiles = Profile::all()->sortDesc();

        return view('layouts/admin/profile',compact('profiles'));
    }
    public function tambahprofile()
    {
        return view('layouts/admin/tambahprofile');
    }

    public function editprofile($id)
    {
        $profile = $this->profile->getById($id);
        return view('layouts/admin/editprofile',compact('profile'));
    }

    public function updateProfile($id){
        $this->profile->updateData($id,$this->request->all());
        return redirect()->route('daftarprofile');
    }

    public function simpanprofile(Request $request)
    {
        $this->profile->saveData($this->request->all());
        return redirect()->route('daftarprofile');
    }

    public function deleteProfile($id)
    {
        $profile = $this->profile->deleteData($id);
        return redirect()->route('daftarprofile');
    }


}
