<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $test = Test::all();
        return view("home", [
            "test" => $test
        ]);
    }

    public function add_test(Request $request): RedirectResponse {
        $request->validate([
            'title' => 'required|min:4|max:7',
        ], [
            'title.required' => 'กรุณากรอกตัวอักษร อย่างน้อย 4 ตัว และไม่เกิน 255 ตัวอักษร',
            'title.min' => 'กรุณากรอกตัวอักษรอย่างน้อย 4 ตัว',
            'title.max' => 'กรุณากรอกตัวอักษรไม่เกิน 7 ตัวอักษร',
        ]);        

        $test = new Test();
        $test->title = $request->title;
        $test->save();
        return redirect("/");
        // return $request->input("title");
    }
}
