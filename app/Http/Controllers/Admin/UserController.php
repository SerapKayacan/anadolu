<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', [
            "users" => $users
        ]);
    }
    public function create()
    {
        return view('admin.user.create');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit', [
            "user" => $user
        ]);
    }

    public function store(Request $request)
    {
        $user = new User();

        $this->validate($request, [
            'password' => 'confirmed|min:4',
        ]);

        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = true;
        $user->save();

        return redirect()->to(route('user.edit', $user->id));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->password) {
            $this->validate($request, [
                'password' => 'confirmed|min:4',
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = $request->is_active;
        $user->update();

        return redirect()->to(route('user.edit', $user->id));
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);

        return view('admin.user.profile', [
            "user" => $user
        ]);
    }

    public function profileUpdate(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        if ($request->password) {
            $this->validate($request, [
                'password' => 'confirmed|min:4',
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->back()->with('success', 'Profiliniz başarıyla güncellendi');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        if ($user){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
