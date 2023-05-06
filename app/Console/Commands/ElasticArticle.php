<?php

namespace App\Console\Commands;

use App\Model\Article;
use Elasticsearch\ClientBuilder;
use Illuminate\Console\Command;

class ElasticArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:elasticarticle';
    protected $documents;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves all the snippets and indexing into elasticsearch';

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
     * @return bool
     */
    public function handle()
    {
        $articles = Article::all();
        $this->documents = [];
        foreach ($articles as $article) {
            $document = [
                'index' => [
                    '_index' => 'demo_index',
                    '_id' => $article->id,
                ],
            ];

            $document['body'] = [
                'id' => $article->id,
                'title' => $article->title,
                'content' => $article->content,
                'created_at' => $article->created_at,
                'updated_at' => $article->updated_at
            ];

            $this->documents[] = $document;
        }
        $client = ClientBuilder::create()->build();
        $params = [
            'body' => $this->documents,
        ];
        $client->bulk($params);
        return true;
    }
}




