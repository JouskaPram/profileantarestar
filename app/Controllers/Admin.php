<?php

namespace App\Controllers;
use App\Models\CardModel;

class Admin extends BaseController
{
     protected $cardmodel;
    public function __construct()
    {
         $this->CardModel = new CardModel();
    }
    public function landing()
    {
      $keyword = $this->request->getVar('keyword');
      if($keyword){
        $this->CardModel->search($keyword);
      }else{
         $this->CardModel->findAll();
      }
       $data=[
            'card'=> $this->CardModel->getCard()
       ];
        return view("admin/home",$data);
    }
    public function detail($slug=null)
    {
 
        $data=[

            'card' => $this->CardModel->getCard($slug)
        ];
        // jika user tidak ada
        if(empty($data["card"])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("user yang anda cari tidak ada>_<");
        }
        return view('admin/detailadmin',$data);
    }
     public function create()
    {
       $data=[
        'title'=>"ini adalah title"
       ];
       return view("admin/create",$data);
    }
    // tambahdata
    public function save()
    {
  if (!$this->validate([
    "slug"=>"required|is_unique[card.slug]|max_length[10]|",
    "gambar"=>[
      "rules"=>"uploaded[gambar]|max_size[gambar,4000]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]",
      "errors"=>[
        'uploaded'=>"Pilih gambar terlebih dahulu",
        'max_size'=>"gambat terlalu besar",
        'is_image'=>"harus pilih gambar",
        'mime_in'=>"yang anda pilih bukan gambar"
      ]


    ]
  ]));
//ambil gambar
$fileGambar= $this->request->getFile('gambar');
// generete nama sampul random
$namagambar=$fileGambar->getRandomName();
//pindahkan file ke folder img
$fileGambar->move('img',$namagambar);
//ambil nama filenya
$namagambar=$fileGambar->getName();
    // insert data in code igniter 4
    $this->CardModel->save([
        "nama" => $this->request->getVar('nama'),
        "gambar" => $namagambar,
        "jabatan" => $this->request->getVar('jabatan'),
        "facebook" => $this->request->getVar('facebook'),
        "twitter" => $this->request->getVar('twitter'),
        "slug" => $this->request->getVar('slug'),
        "alamat" => $this->request->getVar('alamat'),
      
    ]);
    session()->setFlashdata('pesan','card berhasil di tambahkan');
    return redirect()->to("/admin");
    }
    public function delete($id)
    {
    //cari gambar
    $card = $this->CardModel->find($id);
    //hapus gambar
    unlink('img/'.$card['gambar']);
    $this->CardModel->delete($id);
      session()->setFlashdata('pesan','card berhasil di Hapus');
    return redirect()->to("/admin");
        
    }
    public function edit($slug)
    {
      $data=[
         'card'=>$this->CardModel->getCard($slug)
      ];
     

   return view("admin/edit",$data);
    }
    public function update($id)
    {
      if (!$this->validate([
    "slug"=>"required|is_unique[card.slug]|max_length[10]|",
    "gambar"=>[
      "rules"=>"uploaded[gambar]|max_size[gambar,4000]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]",
      "errors"=>[
        'uploaded'=>"Pilih gambar terlebih dahulu",
        'max_size'=>"gambat terlalu besar",
        'is_image'=>"harus pilih gambar",
        'mime_in'=>"yang anda pilih bukan gambar"
      ]


    ]
  ]));
  $fileGambar = $this->request->getFile("gambar");
  //cek gambar apakah upload gabar baru
  if($fileGambar->getError()==4){
    $namagambar= $this->request->getVar('gambarLama');
  }else{
    // genereate nama file random
    $namagambar= $fileGambar->getRandomName();
    //pindahkan gambar
    $fileGambar->move('img',$namagambar);
    //hapus file yang lama
    unlink('img/'.$this->request->getVar('gambarLama'));
  }
    // insert data in code igniter 4
    $this->CardModel->save([
        "id"=>$id,
        "nama" => $this->request->getVar('nama'),
        "gambar" => $namagambar,
        "jabatan" => $this->request->getVar('jabatan'),
        "facebook" => $this->request->getVar('facebook'),
        "twitter" => $this->request->getVar('twitter'),
        "slug" => $this->request->getVar('slug'),
        "alamat" => $this->request->getVar('alamat'),
      
    ]);
    session()->setFlashdata('pesan','card berhasil di ubah');
    return redirect()->to("/admin");
    }
    public function dashboard()
    {
        return 'dashboard page';
    }
}