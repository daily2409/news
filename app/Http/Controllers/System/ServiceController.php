<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Service;
use App\Model\Log;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class ServiceController extends Controller
{
    public function getListService(Request $req) {
        $service = Service::where('status', 1)->orderBy('id', 'desc');
        if($req->id_search){
            $service->where('id', $req->id_search);
        }
        if($req->title_search){
            $service->where('title', 'like', '%'.$req->title_search.'%');
        }
        $service = $service->paginate(20);
        return view('System.Service.ListService', compact('service'));
    }

    public function postAddService(Request $req) {
        $user = Auth::user();
        $this->validate(
            $req,
            [
                'title' => 'required|unique:service|min:3',
                'introduce' => 'required',
                'alt_image' => 'required'
            ]
        );
        $service = new Service;
        $service->title = $req->title;
        $service->slug = changeTitle($req->title);
        $service->image = $req->image;
        $service->alt = $req->alt_image;
        $service->introduce = $req->introduce;
        $service->save();
        if($service){
            $action = 3;
            $comment = 'Add Service ID:'.$service->id.' by ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
        }
        return redirect()->route('system.service.getListService')->with(['flash_level' => 'success', 'flash_message' => 'Add service sucessfully!']);
    }

    public function getEditService($id) {
        $service = Service::find($id);
        return view('System.Service.EditService', compact('service'));
    }

    public function postEditService(Request $req){
        $this->validate(
            $req,
            [
                'title' => 'required|min:3',
                'introduce' => 'required',
                'alt_image' => 'required'
            ]
        );
        $id = $req->id;
        $title = $req->title;
        $slug = changeTitle($req->title);
        $image = $req->image;
        $alt = $req->alt_image;
        $introduce = $req->introduce;
        $update_service = Service::where('id', $id)->update(['title' => $title, 'slug' => $slug, 'image' => $image, 'alt' => $alt, 'introduce' => $introduce,]);
        if($update_service){
            $user = Auth::user();
            $action = 10;
            $comment = 'Update service ID: '.$id.' by user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.service.getListService')->with(['flash_level' => 'success', 'flash_message' => 'Edit service successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit service error!']);
        }
    }

    public function getDeleteService(Request $req){
        $id = $req->id;
        $delete_service = Service::where('id', $id)->update(['status' => 0]);
        if($delete_service){
            $user = Auth::user();
            $action = 9;
            $comment = 'Delete service ID: '.$id.' by user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }

}
