<?php

namespace App\Console\Commands;

use App\Models\PostModel;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PushBaiduCommend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:baidu';
    /**
     * @var string
     * 推送地址
     */
    protected $push_url = 'http://data.zz.baidu.com/urls?site={site}&token={token}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'api 推送 百度收录网站';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): void
    {
        $this->push_url = Str::replaceFirst('{site}', config('app.url'), $this->push_url);
        $this->push_url = Str::replaceFirst('{token}', config('global.baidu_seo_token'), $this->push_url);
        $this->push($this->push_url);
    }

    public function urls(): Collection
    {
        return PostModel::pluck('id')->map(function ($id) {
            return route('home.detail', $id);
        })->push(route('home.index'));
    }

    public function push(string $url)
    {
        $urls = $this->urls();
        $client = new Client();

        $result = $client->post($url, [
            'json' => $urls,
            'allow_redirects' => true,
            'headers' => [
                'content-type' => 'text/plain',
            ],
        ]);
        Log::channel('pushinfo')->info($result->getBody());
    }
}
