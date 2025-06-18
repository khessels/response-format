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
