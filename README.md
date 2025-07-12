# response-format
Enrich the response output by adding a data type mimetype and status. It can also pass the requestr parameters to the response output which is particularly handy in async operations
By default http codes determine the status

API ROUTE:
Route::get( 'profile', [ UserController::class, 'profile'])->middleware( 'ResponseFormat:default, passthrough');

Response generation:
return response("a string") // property 'data' contains string, datatype = 'text/html', status = 200
return response({ 'test' : '}) // property 'data' contains object, datatype = 'application/json', status = 200



Options:
ResponseFormat:default (or none)
passthrough (adds the request parms to the response output)

Usage: 
```php
class SubjectController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return $user;
    }
    public function hello(Request $request)
    {
        try {
            return response()->json( $request->all());
        } catch (\Exception $e) {
            // dontforgettolog            
            return response( $e->getMessage(), 400);
        }
    }
}

Note:
the default response format can also be overridden by a "X-Response-Format" header in the request with the value of 'default' or 'none'
the default response passthrough can also be overridden by a "X-Response-Passthrough" header in the request with the value of true 
