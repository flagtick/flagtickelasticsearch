<?php

namespace App\Providers;

use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;

class ElasticsearchServiceProvider extends ServiceProvider
{
    /*
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /* If elasticsearch ready and you can uncomment */
        $this->app->bind(ClientBuilder::class, function () {
            $config = config('elasticsearch');
            return ClientBuilder::create()
                ->setHosts($config['hosts'])
                ->build();
        });
    }

    /*
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* If elasticsearch ready and you can uncomment */
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'demo_index',
            'body' => [
                'settings' => [
                    'number_of_shards' => 2,
                    'number_of_replicas' => 1
                ]
            ]
        ];
        $exists = $client->indices()->exists(['index' => 'demo_index']);
        if (!$exists) {
            $client->indices()->create($params);
        }
    }
}
