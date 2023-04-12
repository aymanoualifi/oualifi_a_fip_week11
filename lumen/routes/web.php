<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
/** @var \Laravel\Lumen\Routing\Router $router */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,HEAD,PUT,POST,DELETE,PATCH,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
Route::options('/{any:.*}', [function (){ 
   return response(['status' => 'success']); 
  }
 ]
);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', function () {
    echo "<h1>Tattoo Artists</h1>";
});

$router->get('team', ['uses' => 'TeamController@showAllTeams']);
$router->get('team/{id}', ['uses' => 'TeamController@showOneTeam']);
$router->post('team', ['uses' => 'TeamController@createTeam']);
$router->put('team/{id}', ['uses' => 'TeamController@updateTeam']);
$router->delete('team/{id}', ['uses' => 'TeamController@deleteTeam']);


