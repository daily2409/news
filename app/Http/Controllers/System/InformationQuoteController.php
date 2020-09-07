<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\InformationQuote;
use Illuminate\Support\Facades\Auth;
use App\Model\Quote;
use App\Model\Log;

class InformationQuoteController extends Controller
{
    public function getListInformationQuote (Request $req) {
        $information_quote = InformationQuote::where('status', 1)->orderBy('id', 'desc');
        $quote = Quote::where('status', 1)->get();
        if($req->id_search){
            $information_quote->where('id', $req->id_search);
        }
        if($req->name_search){
            $information_quote->where('name', 'like', '%'.$req->name_search.'%');
        }
        if($req->phone_number_search){
            $information_quote->where('phone_number', 'like', '%'.$req->phone_number_search.'%');
        }
        if($req->email_search){
            $information_quote->where('email', 'like', '%'.$req->email_search.'%');
        }
        if($req->quote_search){
            $information_quote->where('quote_id', $req->quote_search);
        }
        $information_quote = $information_quote->paginate(20);
        return view('System.InformationQuote.ListInformationQuote', compact('information_quote', 'quote'));
    }

    public function getEditInformationQuote($id) {
        $quote = Quote::where('status', 1)->get();
        $information_quote = InformationQuote::find($id);
        return view('System.InformationQuote.EditInformationQuote', compact('information_quote', 'quote'));
    }

    public function postEditInformationQuote(Request $req){
        $this->validate(
            $req,
            [
                'name' => 'required|min:3',
                'phone_number' => 'required',
                'email' => 'required',
            ]
        );
        $id = $req->id;
        $name = $req->name;
        $phone_number = $req->phone_number;
        $email = $req->email;
        $quote = $req->quote;
        $update_information_quote = InformationQuote::where('id', $id)->update(['name' => $name, 'phone_number' => $phone_number, 'email' => $email, 'quote_id' => $quote]);
        if($update_information_quote){
            $user = Auth::user();
            $action = 16;
            $comment = 'Update information quote ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
           return redirect()->route('system.information_quote.getListInformationQuote')->with(['flash_level' => 'success', 'flash_message' => 'Edit information quote successfully!']);
        }else{
            return redirect()->back()->with(['flash_level' => 'error', 'flash_message' => 'Edit information quote error!']);
        }
    }

    public function getDeleteInformationQuote(Request $req){
        $id = $req->id;
        $delete_information_quote = InformationQuote::where('id', $id)->update(['status' => 0]);
        if($delete_information_quote){
            $user = Auth::user();
            $action = 15;
            $comment = 'Delete information quote ID: '.$id.' By user ID: '.$user->id;
            Log::insertLog($user->id, $action, $comment);
            echo true;
        }else{
            echo false;
        }
    }

}