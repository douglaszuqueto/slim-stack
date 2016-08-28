<?php
namespace App\Core\Http\Controllers;

use Slim\App;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends Controller
{

    /**
     * HomeController constructor.
     * @param Container $container
     * @param App $app
     */
    public function __construct(Container $container, App $app)
    {
        parent::__construct($container, $app);
    }

    public function index(Request $request, Response $response, $args)
    {
        $this->flash->addMessage('Test', 'This is a message');

        return $this->view->render($response, 'home/home.html', [
            'name' => 'Douglas Zuqueto',
        ]);
    }
}