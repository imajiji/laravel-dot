<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [ 'MySQL',
                    'PostgreSQL',
                    'Microsoft SQL Server'
                  ];
        $contents = [ 'MySQL（マイエスキューエル）は、オラクルが開発するRDBMS（リレーショナルデータベースを管理、運用するためのシステム）の実装の一つである。オープンソースで開発されており、GNU GPLと商用ライセンスのデュアルライセンスとなっている。MySQLは GPL とコマーシャルライセンスのデュアルライセンス方式で提供されている。 基本的に、MySQLのサーバ本体とクライアントライブラリはGPLで提供される。このため、MySQLを改造し、それを再頒布する場合は、GPLに従う必要がある。',
                      'PostgreSQL（ぽすとぐれすきゅーえる: 発音例）は、BSDライセンスに類似するライセンスにより配布されているオープンソースのオブジェクト関係データベース管理システム (ORDBMS) である。その名称は Ingres の後継を意味する「Post-Ingres」に由来している。単純に「Postgres」や「ポスグレ」と呼称されることも多い。PostgreSQL はバージョン 9.0 よりレプリケーションを標準でサポートするが、サードパーティー製のオプション・ソフトウェアも利用できる。Fermion、検索および更新処理の負荷分散、自動フェイルオーバー機能、マルチキャストを用いたノードの自動追加処理機能を備える。',
                      'Microsoft SQL Server （マイクロソフト エスキューエル サーバ）とは、マイクロソフトが開発している、リレーショナルデータベース管理システム (RDBMS)である。略称は「SQL Server」または「MS SQL」などと呼ばれている。主要な問い合わせ言語 (クエリ言語)は、T-SQLとANSI SQLである。企業サーバ向けの高機能なシステムから、組み込み系の小規模なシステムまで幅広く対応する。またMicrosoft Windowsと親和性が高く、ADOやADO.NETを経由して最適なバックエンドデータベースを構築できるようになっている。'
                    ];

        for ($i=0; $i < 3; $i++) {
            DB::table('articles')->insert([
                'title' => $titles[$i],
                'content' => $contents[$i],
            ]);
        }
    }
}
