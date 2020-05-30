<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NotLoggedInFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        if(!isset(session()->isLoggedIn)){
            return redirect()->to("/");
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}