<?php
Route::name('home')->get('/', function () {
  $content = View::make('rek::index');
  return View::make('rek::layouts.default', ['content' => $content]);
});

Route::post('/', function(){
  Mail::to('joejiko@gmail.com')
    ->send(new Rek\Mail\ContactMessage(request()->input()));
  return redirect('/');
});