
<?php
 use \Psr\Http\Message\ServerRequestInterface as Request;
 use \Psr\Http\Message\ResponseInterface as Response;
 
require '../vendor/autoload.php';



$app = new \Slim\App();
$app->get('/books/{id}', function ($request, $response, $args) {
    // Show book identified by $args['id']
    return $response->getBody()->write('hellow books');
});
$app->get('/profile/{name}', function($request, $response) {
 $name = $request->getAttribute('name');
 $response->getBody()->write("Welcome back $name");
 return $response;
});



$app->run();