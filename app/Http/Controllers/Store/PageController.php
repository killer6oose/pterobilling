<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public $pageTitle;
    public $pageBody;

    public function __invoke($slug = null)
    {
        if (is_null($slug)) {
            switch (Route::currentRouteName()) {
                case 'home':
                    $this->pageTitle = 'Home';
                    // Get HTML from the database
                    $this->pageBody = "<h1>Welcome to your new PteroBilling store.</h1>\n<p>This is the home page. You may edit this page in the admin area.</p>";
                    break;
                case 'terms':
                    $this->pageTitle = 'Terms of Service';
                    // Get HTML from the database
                    $this->pageBody = "<h1>Welcome to your Terms of Service page.</h1>\n<p>You may edit this page in the admin area.</p>";
                    break;
                case 'privacy':
                    $this->pageTitle = 'Privacy Policy';
                    // Get HTML from the database
                    $this->pageBody = "<h1>Welcome to your Privacy Policy page.</h1>\n<p>You may edit this page in the admin area.</p>";
                    break;
                case 'status':
                    $this->pageTitle = 'System Status';
                    // Get HTML from the database
                    $this->pageBody = "<h1>Welcome to your System Status page.</h1>\n<p>You may edit this page in the admin area.</p>";
                    break;
                default:
                    return abort(404);
            }
        } else {
            // Get HTML from the database by slug
            $this->pageTitle = "$slug";
            $this->pageBody = "<h1>Welcome to your new custom page.</h1>\n<p>This is a custom page. You may edit this page in the admin area.</p>";
        }
        
        return view('store.page', ['title' => $this->pageTitle, 'body' => $this->pageBody]);
    }
}
