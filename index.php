<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tom S.
 * Date: 23.02.17
 * Time: 14:19
 */

//include cockpit
include_once('cockpit/bootstrap.php');

$app = new Lime\App();

$app->bind("/", function() use($app) {

    $posts = collection('blog')->find()->sort(["created"=>1])->toArray();

    return $app->render('views/index.php', ['posts' => $posts]);

});

$app->bind("/article/:id", function($params) use($app) {

    $post = collection('blog')->findOne(["_id"=>$params['id']]);

    return $app->render('views/article.php', ['post' => $post]);
});

$app->run();