<?php

$router->get('/', 'PersonController@index');
$router->post('/', 'PersonController@create');
$router->get('/status/{id}', 'PersonController@status');
$router->post('/ajax', 'PersonController@ajax');
$router->post('/update', 'PersonController@update');
$router->post('/detail', 'PersonController@detail');
$router->post('/upload', 'PersonController@upload');