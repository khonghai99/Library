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
        $dataCheck = DB::table('tblstudents')->where([['EmailId','=',$userName],['Password','=',$password]])->get('status');
        $data = DB::table('tblstudents')->where([['EmailId','=',$userName],['Password','=',$password]])->get();
        if ($data != null) {
            $request->session()->put('stdid', $data[0]->StudentId);
            if ($dataCheck[0]->status == 1) {
                $issue = $this->getIssuedBooksUser($request);
                $this->getReturnedBooksUser($request);
                return view('Users.dashboard',compact('issue'));

            } elseif ($dataCheck[0]->status == 0) {
                $this->getReturnedBooks($request);
                $this->getIssuedBooks($request);
                $this->getAllBooks($request);
                $this->getAuthorBooks($request);
                $this->getCategory($request);
                $this->getStudent($request);
                return view('Admin.dashboard');
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
        $request->session()->put('returnedbooksuser', $returnedBooks);
    }

    public function getAllBooks(Request $request)
    {
        $data = DB::select("SELECT id from tblbooks ");
        $listedBooks = count($data);
        $request->session()->put('listedbooks', $listedBooks);
    }

    public function getIssuedBooks(Request $request)
    {
        $data = DB::select("SELECT id from tblissuedbookdetails ");
        $listedBooks = count($data);
        $request->session()->put('issuedbooks', $listedBooks);
    }

    public function getReturnedBooks(Request $request)
    {
        $rsts = 1;
        $data = DB::select("SELECT id from tblissuedbookdetails where RetrunStatus='" . $rsts . "'");
        $returnedBooks = count($data);
        $request->session()->put('returnedbooks', $returnedBooks);
    }

    public function getStudent(Request $request)
    {
        $data = DB::select("SELECT id from tblstudents");
        $studentCount = count($data);
        $request->session()->put('regstds', $studentCount);
    }

    public function getAuthorBooks(Request $request)
    {
        $data = DB::select("SELECT id from tblauthors");
        $authorCount = count($data);
        $request->session()->put('listdathrs', $authorCount);
    }

    public function getCategory(Request $request)
    {
        $data = DB::select("SELECT id from tblcategory");
        $categoryCount = count($data);
        $request->session()->put('listdcats', $categoryCount);
    }
}
