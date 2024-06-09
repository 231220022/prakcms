<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(Home $home, Request $request)
    {
        $this->home = $home;
        $this->request = $request;
    }

    
    public function home()
    {
        $homes = Home::where('active', 1)->get();
        return view('layouts/public/home', compact('homes'));
    }

    public function daftarhome()
    {
        $homes = Home::all()->sortdesc();
        return view('layouts/admin/home', compact('homes'));
    }

    public function tambahhome()
    {
        return view('layouts/admin/tambahhome');
    }

    public function simpanhome(Request $request)
    {
        // $this->home->saveData($this->request->all());
        $request->validate([
            'salam' => 'required',
            'konten' => 'required',
            'active' => 'required',
            'image_path' => 'nullable|image|max:2048'
        ]);
        $home = new Home();
        $home->salam = $request->salam;
        $home->konten = $request->konten;
        $home->active = $request->active;
        if ($request->hasFile('image_path')){
            $home->image_path = $request->file('image_path')->store('images','public');
        }

        $home->save();
        return redirect()->route('layout.admin.home');
    }

    public function editHome($id)
    {
        $home = $this->home->getById($id);
        return view('layouts/admin/edithome',compact('home'));
    }

    public function updateHome($id){
        $this->home->updateData($id,$this->request->all());
        return redirect()->route('daftarhome');
    }

    public function deleteHome($id)
    {
        $Home = $this->home->deleteData($id);
        return redirect()->route('daftarhome');
    }


}
