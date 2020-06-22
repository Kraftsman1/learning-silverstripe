<?php

namespace SilverStripe\Lessons;

use PageController;    

class HomePageController extends PageController {

    //Method th fetch latest articles
    public function LatestArticles($count = 3) {
        return ArticlePage::get()->sort('Created', 'DESC')->limit(3);
    }
}

?>