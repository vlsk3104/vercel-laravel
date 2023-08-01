<?php
namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class LineOAuthController extends Controller
{
    // ユーザーをLINEへのOAuthサービスへリダイレクト
    public function redirectToProvider()
    {
        Log::info('Socialite Info: ', ['driver' => Socialite::driver('line')]);
        return Socialite::driver('line')->redirect();
    }

    // LINEからユーザー情報を取得
    public function handleProviderCallback()
    {
        $user = Socialite::driver('line')->user();
        Log::info('User Info: ', ['user' => $user]);
    }
}
