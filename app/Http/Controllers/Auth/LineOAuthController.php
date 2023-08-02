<?php
namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Two\InvalidStateException;

class LineOAuthController extends Controller
{
    // ユーザーをLINEへのOAuthサービスへリダイレクト
    public function redirectToProvider()
    {
        return Socialite::driver('line')->with(['bot_prompt' => 'normal'])->redirect();
    }

    // LINEからユーザー情報を取得
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('line')->user();
        } catch (InvalidStateException $e) {
            $user = null;
        }

        return view('form', ['user' => $user]);
    }
}
