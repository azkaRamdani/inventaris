<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $title = "Ubah Akun";
        $users = User::where('id', auth()->user())->get();

        return view('contents.account.index', compact('title'));
        }

        public function update(Request $request)
        {
            $validatedData = $request->validate([
                'id' =>  'required|min:8|max:16',
                'name'              =>  'required',
                'gender'            =>  'required',
                'email'             =>  'required|email',
                'origin_field'      =>  'required',
                'image'             =>  'image|file|max:5120',
            ]);
    
            User::where('id', auth()->user()->id)->update($validatedData);
    
            return redirect('/account')->with('Berhasil', 'Data akun berhasil dirubah!');
        }
    
        public function password()
        {
            $title = "Ubah Kata Sandi";
            return view('contents.account.password', compact('title'));
        }
    
        public function updatePassword(Request $request, $id)
        {
            $this->validate($request, [
                'password' => 'required',
                'new_password' => 'required|min:8',
                'confirm_password' => 'required|same:new_password'
            ]);
    
            $users = User::where('id', $id)->get();
            foreach($users as $user){
    
            }
            $check = Hash::check($request['password'], $user->password);
            if($check == true){    
                $user->update([
                    'password' => Hash::make($request['new_password'])
                ]);
            }else{
                return redirect('/account/password')->with('Gagal', 'Kata sandi lama salah!');
            }
    
            return redirect('/account/password')->with('Berhasil', 'Kata sandi berhasil dirubah!');
        }
}
