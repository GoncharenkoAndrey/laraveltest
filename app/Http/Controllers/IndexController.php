<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactData;
use GuzzleHttp\Psr7\Message;

class IndexController extends Controller
{
    public function contact(Request $request) {
        $contactModel = new ContactData();
        $request->validate(
            ["name" => "required|max:100",
             "phone" => "required|max:10",
             "email" => "required|max:255",
             "message" => "required"
            ]
        );
        $data = $request->all();
        $contactModel->name = $data["name"];
        $contactModel->phone = $data["phone"];
        $contactModel->email = $data["email"];
        $contactModel->message = $data["message"];
        $contactModel->save($data);
        return redirect("/success");
    }
    public function success() {
        return view("success");
    }
    public function messagesList() {
        $contactModel = new ContactData();
        $messages = $contactModel->all();
        return view("messages", ["messages" => $messages]);
    }
    public function messageView($id) {
        $contactModel = new ContactData();
        $message = $contactModel->find($id);
        return view("message", ["message" => $message]);
    }
}
