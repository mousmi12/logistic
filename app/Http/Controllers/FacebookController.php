<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{ public function getRecentPosts()
    {
        $fb = new Facebook([
            'app_id' => '466056323061017',
            'app_secret' => '5a5ed3df439f0a72f8c64b5b891a5c84',
            'default_graph_version' => 'v12.0',
        ]);

        $accessToken = 'EAAMa5YZB57U8BOxf4efhwlQ4N6c3P3aqcByJt5qbGb6GIoXck2Hf10BCmn3HcQF8QI7HNN9eQrZBWfZCQomUhsW2rtFbr9HzKs4xGW5vaO1NCuXNTlDQurLCsqBEdrs5kVVpZA5m3GL3MmRJP35hF0sHjpwH1gHNYOTkcBp6MBuZCnones42Chi9tlcDdWOGQ5LSl9qH94ZASiL525VZBPJCTWSTQ4iapJKZBPeU5ZCKh6PGabtMbZBoPHxXCISNdrEMdEh3DXSwZDZD';
        $pageId = 'YOUR_PAGE_ID';

        try {
            $response = $fb->get("/{$pageId}/posts?fields=id,message,full_picture,permalink_url", $accessToken);
            $posts = $response->getGraphEdge()->asArray();

            return view('facebook', ['posts' => $posts]);
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // Handle API errors
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors
        }
    }
}
