<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function generateSlug($title)
    {
        $slug = Str::slug($title);
        $count = Article::where('slug', 'like', "{$slug}%")->count();
        
        return $count ? "{$slug}-{$count}" : $slug;
    }
    
    public function index(): View
    {
        $articles = Article::all();

        return view('admin.index', [
            'articles' => $articles,
        ]);
    }

    public function create(): View
    {
        return view('admin.create');
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content' => 'required|string',
        ]);
    
        $validated['slug'] = $this->generateSlug($validated['title']);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $validated['image'] = 'images/' . $filename;
        }
    
        Article::create($validated);
    
        return redirect('/admin')->with('success', 'Article created successfully.');    
    }

    public function login(): View
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function remove(int $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/admin')->with('success', 'Article deleted successfully.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
