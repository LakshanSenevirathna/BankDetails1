<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\BankDetailsModel;

class BankDetailsController extends Controller
{
    public function dashboard(){
        return view('dashboard'); 
    }

    public function login(Request $request){
        $data=new BankDetailsModel;
        $this->validate($request, [
            'email'=>'required|max:100|min:',
            'password'=>'required|',
        ]);

        $data->email=$request->email;
        dd($request);
        // if(){

        // }
    }

    public function addBankDetails(){
        return view('addBankDetails'); 
    }

    public function addBankDetailsSave(Request $request){
        $data=new BankDetailsModel;

        $this->validate($request, [
            'bank_name'=>'required|max:100|min:3',
            'branch'=>'required|max:100|min:5',
            'branch_code'=>'required|max:10|min:2',
            'acc_number'=>'required|max:20|min:5',
        ]);
        $data->bank_name=$request->bank_name;
        $data->branch=$request->branch;
        $data->branch_code=$request->branch_code;
        $data->acc_number=$request->acc_number;
        $data->status='Active';
        $data->save();

        return redirect('viewAll');        
    }

    public function deleteBank($id){
        $data=BankDetailsModel::find($id);
        $data->delete();

        return redirect('viewAll');
    
    }
    
    public function updateBankDetails($id){
        $data=BankDetailsModel::find($id);
        return view('updateBankDetails') -> with('updateData', $data); 
    }

    public function updateBankDB(Request $request){
        $id=$request->id;
        $bank_name=$request->bank_name;
        $branch=$request->branch;
        $branch_code=$request->branch_code;
        $acc_number=$request->acc_number;

        $data=BankDetailsModel::find($id);
        $data->bank_name=$bank_name;
        $data->branch=$branch;
        $data->branch_code=$branch_code;
        $data->acc_number=$acc_number;

        $data->save();

        return redirect('viewAll');

    }

    public function viewAll(){
        $allData=BankDetailsModel::all();
        //dd($allData);
        return view('viewAll') -> with('viewAll', $allData);
    }
}