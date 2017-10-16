<?php
Route::get('/', function () {
  $content = View::make('rek::index');
  return View::make('rek::layouts.default', ['content' => $content]);
});

Route::post('/', function(){
  Mail::to('joejiko@gmail.com')
    ->from('contact@rekconsult.com')
    ->send(new Rek\Mail\ContactMessage(request()->input()));
});