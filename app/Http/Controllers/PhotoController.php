<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Photo;

class PhotoController extends Controller
{
    public function index(Request $request) {
        return view('user_dashboard.dashboard', ['id' => $request->id]);
    }

    public function store(Request $request) {
        $image = new Photo();

        $image->title = $request->title;
        $image->image = $request->image;
        $image->description = $request->description;
        $image->user_id = $request->id;

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/asset_image'.$filename);
        $image->image = $filename;

        $image->save();

        return redirect('/home/' . Auth::user()->id);
    }
}
