<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientMessage;

class ClientMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message = ClientMessage::all();
        return response()->json($message);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'message' => 'required'
        ]);
        
        $message = ClientMessage::create($request->all());

        return response()->json([$message, 201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return response()->json([ClientMessage::findOrFail($id), 200]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'message' => 'required'
        ]);
        
        $message = ClientMessage::update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message
        ]);

        return response()->json([$message, 201]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = ClientMessage::findOrFail($id);
        $message->delete();

        return response()->json(["Delete successfully", 200]);
    }
}
