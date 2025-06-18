# response-format
API ROUTE:
Route::get( 'example', [ SubjectController::class, 'hello'])->middleware( 'ResponseFormat:default, passthrough');

options:
ResponseFormat:default or none 
