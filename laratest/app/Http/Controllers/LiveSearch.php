<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // using the REQUEST library
use App\Http\Requests\studentRequest;// form validation using requests
use Validator;
use App\Employee;// accessing model for user table 
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('home.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('employee') 
       ->where('employer_name', 'like', '%'.$query.'%')
         ->orWhere('company', 'like', '%'.$query.'%')
         ->orWhere('contact_number', 'like', '%'.$query.'%')
         ->orWhere('username', 'like', '%'.$query.'%')
         ->orWhere('password', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('employee')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->employer_name.'</td>
         <td>'.$row->company.'</td>
         <td>'.$row->contact_number.'</td>
         <td>'.$row->username.'</td>
         <td>'.$row->password.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

