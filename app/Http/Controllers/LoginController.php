<?php
/**
 * Created by PhpStorm.
 * User: vinicius
 * Date: 27/07/18
 * Time: 15:42
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function makeLogin(Request $request)
    {
        $email = $request->get("email");
        $password = $request->get("password");

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route("home");
        } else {
            return redirect()->route("login", ["email" => $email]);
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route("login");

    }
}