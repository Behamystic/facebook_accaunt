<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('users.index');
        }
        return view('register');
    }
    public function handleLogin()
    {
        if (Auth::check()) {
            return redirect()->route('users.index');
        }


        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Agar rasm bor bo‘lsa, yuklaymiz
        if ($request->hasFile('image')) {
            // Agar foydalanuvchida eski rasm bo‘lsa — o‘chiramiz
            if ($user->image && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
    
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images', $fileName, 'public');
    
            $user->image = $filePath;
            $user->save();
        }
    
        Auth::login($user);
    
        return redirect()->route('users.index');
    }
    
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('users.index');
        }
    
        return back()->withErrors([
            'email' => "Email yoki parol noto‘g‘ri",
        ])->withInput();
    }
    

    public function  logout(Request  $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('handleLogin');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();
        if ($request->filled('name')) {
            $user->name = $request->name;
        }
        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            $user->password = $request->password;
        }

        if ($request->hasFile('image')) {
            if ($user->image) {
                $imagePath = storage_path('app/public/' . $user->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images', $fileName, 'public');
            $user->image = $filePath;
        }

        //shuni yozmasam $user->save(); save qizarib qolyapti lekin ishlayapti shundog'am baribir quyib quydimshuni 
        if ($user instanceof User) {
            $user->save($data);
        } else {
            throw new \Exception("Invalid user instance.");
        }
        return redirect()->route('users.index', ['user' => $user->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
