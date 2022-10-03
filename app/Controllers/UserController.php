<?php

namespace App\Controllers;
use App\Models\CardModel;
class UserController extends BaseController
{
     protected $cardmodel;
    public function __construct()
    {
         $this->CardModel = new CardModel();
    }
    public function home()
    {
        
       $data=[
            'card'=> $this->CardModel->paginate(6,'card'),
            'pager' => $this->CardModel->pager,
       ];
        return view("user/landingpage",$data);
}
public function detail($slug)
    {
 
        $data=[

            'card' => $this->CardModel->getCard($slug)
        ];
        return view('user/detail',$data);
    }
}
