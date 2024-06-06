<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'phone',
        'pesan',
    ];

    public function saveData($data){
        $contact = new contact();
        $contact->nama = $data['nama'] ?? null;
        $contact->email = $data['email'] ?? null;
        $contact->phone = $data['phone'] ?? null;
        $contact->pesan = $data['pesan'] ?? null;
        $contact->save();
    }

    public function deleteData($id){
        Contact::where('id',$id)->delete($id);
    }

}
