<?php 

namespace App\Http\Controllers;

use Illiminate\Http\Request;
use Illuminate\Routing\Controller;

class ManagementUserController extends Controller
{
    public function index(){
        return "Hallo ini adalah method index, dalam controller Management.";
    }
}
?>