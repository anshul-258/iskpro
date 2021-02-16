<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DataTables;
use App\User;
use Auth;

class AdminUserController extends Controller
{
        public function __construct()
        {
        	$this->middleware('auth', ['except' => 'logout']);
        }
	   public function index()
	   {
	   	 $data['blog'] = \App\User::All();
         $data['title'] = 'Users';
         $data['class'] = 'user';
	   	 return view('admin.user.list',$data);
	   }

	   public function getUsers(Request $request)
    { 

       //  if($request->search)
       //  {
       //      if(Auth::user()->role_id == 2)
       //      {
       //          $users = User::join('role','users.role_id','=','role.id')->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->where('users.role_id','!=',1)->where('users.role_id','!=',2)->get();
       //      }
       //      elseif(Auth::user()->role_id == 3)
       //      {
       //          $users = User::join('role','users.role_id','=','role.id')->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->where('role.name','like','%'.$request->search['value'].'%')->orwhere('users.name','like','%'.$request->search['value'].'%')->orwhere('users.email','like','%'.$request->search['value'].'%')->orwhere('users.status','like','%'.$request->search['value'].'%')->get();
       //      }
       //      else
       //      $users = User::join('role','users.role_id','=','role.id')->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->where('role.name','like','%'.$request->search['value'].'%')->orwhere('users.name','like','%'.$request->search['value'].'%')->orwhere('users.email','like','%'.$request->search['value'].'%')->orwhere('users.status','like','%'.$request->search['value'].'%')->get(); 
       // }

        //else
        if(Auth::user()->role_id == 2)
        {
            $users = User::join('role','users.role_id','=','role.id')->where('users.role_id','!=',1)->where('users.role_id','!=',2)->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->get();
        }
        elseif(Auth::user()->role_id == 3)
        {
            $users = User::join('role','users.role_id','=','role.id')->where('users.role_id','!=',1)->where('users.role_id','!=',2)->where('users.role_id','!=',3)->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->get();
        }
        else
        {
            $users = User::join('role','users.role_id','=','role.id')->select(['users.name as uname','users.email as uemail', 'role.name as rname','users.status','users.id'])->get();
        }

        return DataTables::of($users)
             ->editColumn('status', function ($users) {

                if($users->status == 'inactive')
                $button = '<button class="btn btn-danger status" id="'.$users->id.'" data-value = "inactive">Inactive</button>';
                elseif($users->status == 'active')
                $button = '<button class="btn btn-success status" id="'.$users->id.'" data-value = "active">Active</button>';
                else
                    $button = '';
                return $button;
            })
            ->addColumn('action', function ($users) {
                return '<a href="'.PREFIX.'admin/user/edit/'.$users->id.'"><i class = "fa fa-pencil-square-o"></i> </a><button data-value="'.$users->id.'" class="btn delete" id="delete_'.$users->id.'"><i class = "fa fa-trash"></i> </button>';
            })
            
            ->removeColumn('users.id')
            
             ->rawColumns(['status', 'action'])
            ->make(true);
    }

     public function store(Request $request)
    {
    	//dd($request->all());
        $blog = User::where('email',$request->email)->first();
        if($blog)
        return redirect()->back()->with('message','User Already Exist');
        $blog = new User;
        $blog->name = $request->name;
        $blog->email = $request->email;
        $blog->password = bcrypt($request->password);
        $blog->role_id = $request->role_id;
        $blog->save();
        return redirect()->back()->with('message','Blog Created Successfully');
    }

     public function edit($id)
	   {
	   	 $data['blog'] = \App\User::find($id);
         $data['title'] = 'Edit User';
         $data['class'] = 'user';
	   	 return view('admin.user.edit',$data);
	   }


     public function update(Request $request)
    {
    	//dd($request->all());
        $blog =  User::find($request->user_id);
        $blog->name = $request->name;
        $blog->email = $request->email;
        $blog->password = bcrypt($request->password);
        $blog->role_id = $request->role_id;
        $blog->save();
        return redirect(PREFIX.'admin/user/list')->with('message','User Updated Successfully');
    }

     public function delete(Request $request)
       {
         $blog = \App\User::find($request->val);
         $blog->delete();

         return 1;
       }

     public function status(Request $request)
    {
        //dd($request->all());
        $blog =  User::find($request->id);
        if($request->val == 'inactive')
        $blog->status = 'active';
        else
        $blog->status = 'inactive';
        $blog->save();
        return $blog->status;
    }
}
