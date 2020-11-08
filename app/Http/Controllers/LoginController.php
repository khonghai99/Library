<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('Users.login');
    }

    public function login(Request $request)
    {
        $userName = $request->emailid;
        $password = md5($request->password);
        $dataCheck = DB::table('tblstudents')->where([['EmailId', '=', $userName], ['Password', '=', $password]])->get('status');
        $data = DB::table('tblstudents')->where([['EmailId', '=', $userName], ['Password', '=', $password]])->get();
        if ($data != null) {
            $request->session()->put('stdid', $data[0]->StudentId);
            if ($dataCheck[0]->status == 1) {
                $request->session()->put('login', 1);
                $issueBooksUser = $this->getIssuedBooksUser($request);
                $returnedBooksUser = $this->getReturnedBooksUser($request);
                return view('Users.dashboard', compact('issueBooksUser', 'returnedBooksUser'));

            } elseif ($dataCheck[0]->status == 0) {
                $returnedBooks = $this->getReturnedBooks($request);
                $issuedBooks = $this->getIssuedBooks($request);
                $allBooks = $this->getAllBooks($request);
                $authorBooks = $this->getAuthorBooks($request);
                $category = $this->getCategory($request);
                $student = $this->getStudent($request);
                return view('Admin.dashboard', compact('returnedBooks', 'issuedBooks', 'allBooks', 'authorBooks', 'category', 'student'));
            } else {
                return '<script>alert("Tài khoản đã bị khóa");</script>';
            }
        } else {
            return view('Users.login');
        }
    }

    public function getIssuedBooksUser(Request $request)
    {
        $sid = $request->session()->get('stdid');
        $data = DB::table('tblissuedbookdetails')->where('StudentID', '=', $sid)->count();
        return $data;
    }

    public function getReturnedBooksUser(Request $request)
    {
        $sid = $request->session()->get('stdid');
        $rsts = 0;
        $data = DB::table('tblissuedbookdetails')->where([['StudentID', '=', $sid], ['RetrunStatus', '=', $rsts]])->count();
        return $data;
    }

    public function getAllBooks()
    {
        $data = DB::table('tblbooks')->count();
        return $data;
    }

    public function getIssuedBooks()
    {
        $data = DB::table('tblissuedbookdetails')->count();
        return $data;
    }

    public function getReturnedBooks()
    {
        $rsts = 1;
        $data = DB::table('tblissuedbookdetails')->where('RetrunStatus','=',$rsts)->count();
        return $data;
    }

    public function getStudent()
    {
        $data = DB::table('tblstudents')->count();
        return $data;
    }

    public function getAuthorBooks()
    {
        $data = DB::table('tblauthors')->count();
        return $data;
    }

    public function getCategory()
    {
        $data = DB::table('tblcategory')->count();
        return $data;
    }
}
