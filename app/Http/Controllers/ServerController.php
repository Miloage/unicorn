<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OfficialAccountsRepository;
use EasyWeChat\Factory as EasyWeChat;

class ServerController
{
    protected $accounts;

    public function __construct(OfficialAccountsRepository $accounts)
    {
        $this->accounts = $accounts;
    }

    public function index(Request $request)
    {
        $account = $this->accounts->where('origin_id', $request->origin_id)->first();

        $config = [
            'app_id' => $account->app_id,
            'secret' => $account->app_secret,
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => storage_path('logs').'/wechat.log',
            ]
        ];

        $app = EasyWeChat::officialAccount($config);
        return $app->server->serve();
    }
}
