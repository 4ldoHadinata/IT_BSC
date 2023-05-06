<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(): Response
    {
        return response()
            ->view('index', [
                "title" => "TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN IT BALANCED SCORECARD"
            ]);
    }

    public function doLogin(Request $request): Response | RedirectResponse
    {
        $TITLE = "TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN IT BALANCED SCORECARD";
        $getUsername = $request->input('username');
        $getPassword = $request->input('password');

        // form input validation
        if(empty($getUsername) || empty($getPassword)){
            return response()
                ->view('index', [
                    "title" => $TITLE,
                    "error" => "Username or Password is required"
                ]);
        };

        // check user in db
        if($this->userService->login($getUsername, $getPassword)){
            $request->session()->put("user", $getUsername);
            return redirect('template');
        }else{
            return response()
                ->view('index', [
                    "title" => $TITLE,
                    "error" => "Username not exist, please register first !!"
                ]);
        }
    }

    public function doLogout(Request $request): RedirectResponse
    {
        $request->session()->forget("user");
        $request->session()->flush();
        return redirect('/');
    }
}
