<?php



use App\Http\Controllers\confirmMailController;
use App\Http\Controllers\welcomeMailController;
use App\Http\Controllers\notificationsMailController;
use App\Http\Controllers\marketingMailController;
use App\Http\Controllers\deliveryStatusMailController;







use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/sendConfirmMail', [confirmMailController::Class,"store"]);
Route::post('/sendWelcomeMail', [welcomeMailController::Class,"store"]);
Route::post('/sendMarketingMail', [marketingMailController::Class,"store"]);
Route::post('/sendNotificationMail', [notificationsMailController::Class,"store"]);
Route::post('/sendDeliveryStatusMail', [deliveryStatusMailController::Class,"store"]);

