<?php
    
    $twoLastBlogs = Blogs::getLastTwoBlogs();
    $twoLastReviews = Reviews::getLastTwoReviews();

    $totalBlogs = Blogs::countBlogs();
    $totalReviews = Reviews::countReviews();
?>