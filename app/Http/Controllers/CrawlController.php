<?php

namespace App\Http\Controllers;

use App\Crawl;
use Illuminate\Http\Request;

 use Goutte\Client;
 use Symfony\Component\DomCrawler\Crawler;

class CrawlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function show(Crawl $crawl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function edit(Crawl $crawl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crawl $crawl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crawl $crawl)
    {
        //
    }

    public function crawlerAction()

    {

        

        $client = new Client();

        $crawler = $client->request('GET', $html);

        $links_count = $crawler->filter('a')->count();

        $all_links = [];

        if($links_count > 0){

            $links = $crawler->filter('a')->links();

            foreach ($links as $link) {

                $all_links[] = $link->getURI();

            }


            $all_links = array_unique($all_links);

            echo "All Available Links From this page $url Page<pre>"; print_r($all_links);echo "</pre>";
        } else {

            echo "No Links Found";

        }

        die;


}

}