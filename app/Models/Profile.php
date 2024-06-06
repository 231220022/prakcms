<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'awal',
        'akhir',
        'jenis',
        'jabatan',
        'nm_ins',
        'almt_ins',
        'deskripsi',
    ];

    public function saveData($data){
    $profile = new Profile();
    $profile->awal = $data['awal'] ?? null;
    $profile->akhir = $data['akhir'] ?? null;
    $profile->jenis = $data['jenis'] ?? null;
    $profile->jabatan = $data['jabatan'] ?? null;
    $profile->nm_ins = $data['nm_ins'] ?? null;
    $profile->almt_ins = $data['almt_ins'] ?? null;
    $profile->deskripsi = $data['deskripsi'] ?? null;
    $profile->save();
}
    public function getById($id){
        return Profile::where('id','=',$id)->first();
    }

    public function updateData($id, $data)
{
    Profile::where('id', $id)->update([
        'awal' => $data['awal'] ?? null,
        'akhir' => $data['akhir'] ?? null,
        'jenis' => $data['jenis'] ?? null,
        'jabatan' => $data['jabatan'] ?? null,
        'nm_ins' => $data['nm_ins'] ?? null,
        'almt_ins' => $data['almt_ins'] ?? null,
        'deskripsi' => $data['deskripsi'] ?? null
    ]);
}

    public function deleteData($id){
        Profile::where('id',$id)->delete($id);
    }


}
