<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('chat.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('chat.{id}', function ($user) {
    return $user;
});

// Broadcast::routes(['middleware' => ['web']]);
// Broadcast::channel('chat.{id}', function ($user) {
//     return $user;
// });
// Broadcast::routes(['middleware'=>['auth:web']]);
// Broadcast::routes(['middleware'=>['auth:therapist']]);

// if(Auth::guard('web')->check()){

// }
// elseif(Auth::guard('therapist')->check()){
  Broadcast::routes(['middleware' => ['web','auth:therapist']]); //Red to grinch
// }
