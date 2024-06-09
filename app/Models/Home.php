<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'salam',
        'konten',
        'active',
        'image_path',
    ];

    // public function saveData($data)
    // {
    //     $home = new Home();
    //     $home->salam = $data['salam'] ?? null;
    //     $home->konten = $data['konten'] ?? null;
    //     $home->active = $data['active'] ?? null;
    
    //     // Handle file upload
    //     if (isset($data['image_path']) && $data['image_path'] instanceof \Illuminate\Http\UploadedFile) {
    //         $imagePath = $data['image_path']->store('images', 'public');
    //         $home->image_path = $imagePath;
    //     } else {
    //         $home->image_path = null;
    //     }
    
    //     $home->save();
    // }

public function getById($id){
    return Home::where('id','=',$id)->first();
}

public function updateData($id, $data){
    Home::where('id', $id)->update([
        'salam' => $data['salam'] ?? null,
        'konten' => $data['konten'] ?? null,
        'active' => $data['active'] ?? null,
        'image_path' => $data['image_path'] ?? null
    ]);
}

public function deleteData($id){
    Home::where('id',$id)->delete($id);
}


}
