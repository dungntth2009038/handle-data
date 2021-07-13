<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return $id;
    }
    public function handleQueryString(Request $req){
        $firstname = $req->get('firstName');
        $lastname = $req->get('lastName');
        $email = $req->get('email');
        return view('datahandle',[
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
        ]);
    }
    public function returnForm(){
        return view('form-data');
    }

    public function processForm(Request $req){
        $eventname = $req->get('eventName');
        $bandnames = $req->get('bandNames');
        $startdate = $req->get('startDate');
        $enddate = $req->get('endDate');
        $portfolio = $req->get('portfolio');
        $ticketprice = $req->get('ticketPrice');
        $status = $req->get('status');
        return view('form-success', [
            'eventname' => $eventname,
            'bandnames' => $bandnames,
            'startdate' => $startdate,
            'enddate' => $enddate,
            'portfolio' => $portfolio,
            'ticketprice' => $ticketprice,
            'status' => $status,
        ]);
    }
}
