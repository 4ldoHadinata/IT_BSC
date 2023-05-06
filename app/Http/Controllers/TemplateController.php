<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TemplateController extends Controller
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function template(): Response
    {
        $TITLE = "TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN IT BALANCED SCORECARD";
        return response()
            ->view('template', [
                "title" => $TITLE
            ]);
    }
}
