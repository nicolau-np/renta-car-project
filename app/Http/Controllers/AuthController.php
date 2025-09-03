<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class AuthController extends Controller
{

    public function __construct(private MenuItemsHelper $menuItemsHelper) {}

    public function login()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();

        $title = Config::get('app.name');
        $menu = "Iniciar Sessão";
        $submenu = "";
        $type = "auth";

        return view('auth.login', compact('title', 'menu', 'submenu', 'type', 'items_do_menu'));
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        $auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if ($auth)
            return redirect('/panel');

        if (!$auth)
            return back()->with('error', 'Erro na palavra-passe');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
