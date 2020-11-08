<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function myProfile(Request $request)
    {
        $sid = $request->session()->get('stdid');

        return view('Users.my-profile');
    }

    public function changePassword()
    {
        return view('Users.change-password');
    }

    public function dashBoard(Request $request)
    {
        $issueBooksUser = $this->getIssuedBooksUser($request);
        $returnedBooksUser=$this->getReturnedBooksUser($request);
        return view('Users.dashboard', compact('issueBooksUser','returnedBooksUser'));
    }

    public function getIssuedBooksUser(Request $request)
    {
        $sid = $request->session()->get('stdid');
        $data = DB::select("SELECT id from tblissuedbookdetails where StudentID='" . $sid . "'");
        $issuedBooks = count($data);
        return $issuedBooks;
    }

    public function getReturnedBooksUser(Request $request)
    {
        $sid = $request->session()->get('stdid');
        $rsts = 0;
        $data = DB::select("SELECT id from tblissuedbookdetails where StudentID='" . $sid . "' and RetrunStatus='" . $rsts . "'");
        $returnedBooks = count($data);
        return $returnedBooks;
    }
}
