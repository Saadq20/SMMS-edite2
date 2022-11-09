<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Exception;
use Socialite;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Analysis;

class AnalysisController extends Controller
{
   
    public function index()
    {
        $Analysis=Analysis::get();
        return view('analysis',compact('Analysis'));
    }
}