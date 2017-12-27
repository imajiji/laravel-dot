<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;

class PaymentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:payment {table_name=posts : テーブル名を指定} {--dry-run : テスト実行}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '請求確定用のコマンドアプリケーションです。';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->params = array(
            'version'         => '212',
            'bill_method'     => '05',
            'kessai_id'       => '0501',
            'shop_cd'         => '3190256',
            'syuno_co_cd'     => '56968',
            // 'kyoten_cd'       => '',
            'shop_pwd'        => 'yuZ4sYN3123456',
            'shoporder_no'    => '', // shoporder_no
            'seikyuu_kingaku' => '', // seikyuu_kingaku
        );
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $posts = Post::where('payment_status', "")->latest('posts.created_at')->get(['shoporder_no', 'seikyuu_kingaku']);
        foreach ($posts as $key => $value) {
            $this->params['shoporder_no'] = $value['shoporder_no'];
            $this->params['seikyuu_kingaku'] = $value['seikyuu_kingaku'];

            $response = $this->postCurl( array("url" => "https://www.paymentstation.jp/cooperationtest/sf/cd/skuinfokt/skuinfoKakutei.do", "params" => $this->params) );

            $encoded_response = mb_convert_encoding($response, 'utf-8', 'SJIS');
            dd($encoded_response);
        }

        // $dry_run = $this->option("dry-run");
        // if (!empty($dry_run)) {
        //     $this->line('これがスクリーンに表示される');
        // } else {
        //     $table_name = $this->argument("table_name");
        //     $this->info("Hello $table_name");
        // }
    }

    function postCurl( $curl_data = array() )
    {
        if ( !empty($curl_data["url"]) && !empty($curl_data["params"]) ) {
            // POST送信
            $curl=curl_init($curl_data["url"]);
            curl_setopt($curl,CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($curl_data["params"]));
            if ( !empty($curl_data["header"]) ) {
              curl_setopt($curl, CURLOPT_HTTPHEADER, $curl_data["header"]);
            }
            curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($curl,CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl,CURLOPT_HEADER, FALSE);
            curl_setopt($curl,CURLOPT_COOKIEJAR,      'cookie');
            curl_setopt($curl,CURLOPT_COOKIEFILE,     'tmp');
            curl_setopt($curl,CURLOPT_FOLLOWLOCATION, TRUE);

            $res = curl_exec($curl);
            // print_r(curl_getinfo($curl));
            curl_close($curl);

            return $res;
            // return json_decode($res, true);
        }
    }
}
