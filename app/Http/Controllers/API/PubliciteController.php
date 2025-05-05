<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publicite;

class PubliciteController extends Controller
{
    public function index()
    {
        $publicites = Publicite::with(['models', 'marque'])->get();
        return response()->json($publicites);
    }
}
