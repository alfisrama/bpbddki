<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    protected function index() {
    
    }

    protected function create() {
    
    }

    public function store(Request $request) {
    
    }

    public function show($id) {
        return redirect('user');
    }

    protected function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }

    public function update($id, Request $request) {
        $user = User::findOrFail($id);
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users,email,' . $data['id'],
            'password' => 'sometimes|nullable|confirmed|min:6'
        ]);

        if ($validasi->fails()) {
            return redirect("profile/$id/edit")
                    ->withErrors($validasi)
                    ->withInput();
        }

        if ($request->filled('password')) {
            // Hash password.
            $data['password'] = bcrypt($data['password']);
        }
        else {
            // Hapus password (password tidak diupdate).
            $data = array_except($data, ['password']);
        }

        $user->update($data);

        return redirect('/home');
    }

    protected function destroy($id) {
    
    }
}
