# response-format
API ROUTE:
Route::get( 'profile', [ UserController::class, 'profile'])->middleware( 'ResponseFormat:default, passthrough');

Options:
ResponseFormat:default or none 

Usage: 
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
