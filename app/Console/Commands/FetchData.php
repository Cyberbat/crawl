<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

use Carbon\Carbon;
use App\Post;
use App\Domain;

class FetchData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
   
    {
        $post= Post::all();

        $now=Carbon::now(3);

        $time = $now->toTimeString();


        foreach($post as $post){

            $url = $post->url;
            $title = $post->title;

            $id = $post->id;

            $domain = $post->domain->name;

            $nextvisit = $post->nextvisit;

         if($time > $nextvisit ){


            $client = new Client();

            $crawler = $client->request('GET', $url);

            $links_count = $crawler->filter('a')->count();

            $all_links = [];

            $body = $crawler->filterXPath('//body//div/p')->extract(['_text']); 



            $post1= Post::find($id);

            $post1->body = json_encode($body);

            $post1->save();

            if($links_count > 0){

                $links = $crawler->filter('a')->links();

                foreach ($links as $link) {

                    $all_links[] = $link->getURI();

                }


                $all_links = array_unique($all_links);

                echo "\n \n Getting all Available Links..... \n\n Title: $title \n From: $domain \n with the URL of: $url \n \n "; print_r($all_links);
            } else {

                echo "No Links Found check the URL: $url";

            }

        }else{

            echo "\n\n You are up to date for post with \n Title: $title \n From: $domain \n URL: $url \n \n  ";
        }

         

            }

        }
      

       
}
