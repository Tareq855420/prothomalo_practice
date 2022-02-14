<?php

require_once 'vendor/autoload.php';

use App\Classes\Home;
use App\Classes\Category;
use App\Classes\News;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        $category = new Category();
        $categories = $category->category();
        $news = new News();
        $newses = $news->index();
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'category-news')
    {
        $category = new Category();
        $categories = $category->category();
        $news = new News();
        $newses = $news->someNews($_GET['news_id']);
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'news-details')
    {
        $category = new Category();
        $categories = $category->category();
        $news = new News();
        $newsDetails = $news->getNewsDetails($_GET['news_id']);
        include 'pages/newsDetails.php';
    }
}
