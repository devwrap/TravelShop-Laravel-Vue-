<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;


class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all_request = Post::all();
        if($all_request)
            return Response::json(['data' => $all_request], 200);
        else
            return Response::json(['error' => 'No data found!!'], 400);
    }

    public function create()
    {
        return view('requestCreate');
    }

    public function store(Request $request)
    {
        $new_request = new Request();
        $new_request->item_name = $request->item_name;
        $new_request->item_description = $request->item_description;
        $new_request->country = $request->coutnry;
        $new_request->quantity = $request->quantity;
        $new_request->price = $request->price;
        $new_request->status = "open";
        //$new_request->user_id = $user_id;


    }

    public function show($id)
    {
        $request = Post::find($id);

        return view('pages.requestDetailsPage')->with('request', $request);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function save(Request $request, $user_id)
    {

        $new_request = new Post;
        $new_request->item_name = $request->item_name;
        $new_request->item_description = $request->item_description;
        $new_request->country = $request->country;
        $new_request->quantity = $request->quantity;
        $new_request->price = $request->price;
        $new_request->status = "open";
        $new_request->user_id = $user_id;
        $new_request->save();

        return redirect('home');
    }
}
