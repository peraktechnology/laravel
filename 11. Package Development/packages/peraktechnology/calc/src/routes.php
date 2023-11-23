<?php

Route::get('calc', function(){

    echo 'Hello from the Calc package!';

});

Route::get('add/{a}/{b}','peraktechnology\Calc\CalcController@add');
Route::get('subtract/{a}/{b}','peraktechnology\Calc\CalcController@subtract');
