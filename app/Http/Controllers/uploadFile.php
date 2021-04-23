<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;

class uploadFile extends Controller
{
    public function index(){
        return('mainpage');
    }
    public function uploadSubmit(Request $req){
        //dd($req);
        if($req->hasFile('image')){
            $allowedfileExtension=['pdf', 'jpg', 'png', 'JPG', 'docx'];
            $file = $req->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            
            if($check){
                $filename = $req->document__file->store('uploads');
               
                $item = new Item();
                $item->name = $filename;
                $item->save();
                
                $itemDetails = new ItemDetails();
                $itemDetails->item_id = $item->id;
                $itemDetails->filename = $filename;
                $itemDetails->save();
                //dd($itemDeteils);

            }
        }

        return redirect('/mainpage');
    }
}
