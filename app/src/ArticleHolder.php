<?php 

namespace SilverStripe\Lessons;

use Page;

class ArticleHolder extends Page {
    private static $allowed_children = [
        ArticlePage::class
    ];

    private static $can_be_root = false;
}

?>