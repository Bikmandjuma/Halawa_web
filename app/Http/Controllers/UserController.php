<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AboutUs;
use App\Models\activity;
use App\Models\ContactUs;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login']]);
    }
    
    /**
     * @OA\Get(
     *      path="/api/user/info",
     *      operationId="authUserInfo",
     *      tags={"Auth User Information"},
     *      summary="Get information of authenticated user",
     *      description="Returns auth user info",
     *      security={{"token":{}}},
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful Query",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *     )
     */

    public function UserInfo()
    {
        $user=Auth::user();
        return response()->json([
            'user-info' => $user,
        ],200);
    }

    //register new muslim

     /**
        * @OA\Post(
        * path="/api/RegisterMuslim",
        * operationId="RegisterMuslim",
        * tags={"Admin/Amir register muslim"},
        * summary="Register muslim",
        * description="Register muslim",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"firstname", "lastname","gender","email","phone","image","study_status","start_year","end_year","role","birth_date","residence","department"},
        *               @OA\Property(property="firstname", type="text"),
        *               @OA\Property(property="lastname", type="text"),
        *               @OA\Property(property="email", type="text"),
        *               @OA\Property(property="gender", type="text"),
        *               @OA\Property(property="phone", type="text"),
        *               @OA\Property(property="birth_date", type="text"),
        *               @OA\Property(property="study_status", type="text"),
        *               @OA\Property(property="start_year", type="text"),
        *               @OA\Property(property="end_year", type="text"),
        *               @OA\Property(property="department", type="text"),
        *               @OA\Property(property="role", type="text"),
        *               @OA\Property(property="residence", type="text"),
        *               @OA\Property(property="image", type="file"),
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Register successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        */

    public function RegisterMuslim(Request $req){
        $req->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|string',
            'study_status' => 'required|string',
            'start_year' => 'required|string',
            'end_year' => 'required|string',
            'role' => 'required|string',
            'phone' => 'required|unique:users,phone',
            'birth_date' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'department' => 'required|string',
            'password' => 'required|string|between:8,32',
            'residence' => 'required|string',
            'image' => 'required|string',
        ]);

        $user=new User;
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->gender = $req->gender;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->department = $req->department;
        $user->study_status = $req->study_status;
        $user->start_year = $req->start_year;
        $user->end_year = $req->end_year;
        $user->birth_date = $req->birth_date;
        $user->residence = $req->residence;
        $user->password = bcrypt($req->phone);
        // $user->image = $req->image;

        if($req->hasFile('image')){
            $file= $req->file('image');
            $filename= date('YmdHis').$file->getClientOriginalName();
            $extenstion = $file->getClientOriginalExtension();
            $file-> move(public_path('images/user/muslim'), $filename);
            $user->image = $filename;
        };

        $user->save();

        return response()->json([
            'status' => 'New Muslim added successfully "',
            'message' => $user,
        ],200);
    
    }

    //Display muslims info on homepage

    /**
     * @OA\Get(
     *      path="/api/ViewAllMuslims",
     *      operationId="ViewMuslimsInfo",
     *      tags={"Guest view muslim info "},
     *      summary="Guest view muslims info",
     *      description="Returns mulsims info",
     *      security={{"token":{}}},
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful Query",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *     )
     */

    public function ViewAll(){
        $muslims=User::all()->where('role','!=','admin');
        $m_count=collect($muslims)->count();

        if($m_count != 0){
            return response()->json([
                'status' => 'All Muslims',
                'data' => $muslims,
            ],200);
        }else{
            return response()->json([
                'error' => 'No data found !'
            ]);
        }

    }

    public function MuslimGraduated(){
        $graduated=User::all()->where('study_status','graduated');

        return response()->json([
            'status' => 'Graduated Muslims',
            'message' => $graduated,
        ]);

    }


    public function MuslimStillStudying(){
        $StillStudying=User::all()->where('study_status','!=','Graduated')->where('study_status','!=','graduated');

        return response()->json([
            'status' => 'Still Studying Muslims',
            'message' => $StillStudying,
        ]);
    }

    public function EditMyInfo(Request $request){
        $id=Auth::user()->id;
    }

     //Create about us content

     /**
        * @OA\Post(
        * path="/api/user/CreateAboutUs",
        * operationId="CreateAboutUs",
        * tags={"Admin/Amir Create AboutUs content"},
        * summary="Create about us",
        * description="Create About us",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"content","image"},
        *               @OA\Property(property="content", type="text"),
        *               @OA\Property(property="image", type="file"),
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=201,
        *          description="Register successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=200,
        *          description="Register Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(
        *          response=422,
        *          description="Unprocessable Entity",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Bad request"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
        */


    public function CreateAboutUs(Request $request){
        $request->validate([
            'content' => 'required|string',
            'image' => 'required|mimes:jpeg,png,gif,pdf,jpg',
        ]);

        $AboutUs=new AboutUs;
        $AboutUs->content = $request->content;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= date('YmdHis').$file->getClientOriginalName();
            $file-> move(public_path('Images/AboutUs'), $filename);
            $AboutUs['image']= $filename;
        }

        $AboutUs->save();

        if ($AboutUs) {
            return response()->json([
                "message" => "About us content added successfully !"
            ],200);
        }else{
            return response()->json([
                "ErrorMessage" => "Error to add About us content !"
            ],400);
        }

    }

    //About us contents

    /**
     * @OA\Get(
     *      path="/api/ViewAboutUs",
     *      operationId="AboutUs",
     *      tags={"Guest view about us contents"},
     *      summary="Guest view about us content",
     *      description="Returns about us contents",
     *      security={{"token":{}}},
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful Query",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *     )
     */

    public function ViewAboutUs(){
        $about=AboutUs::all();
        return response()->json([
            'data' => $about
        ],200);
    }

    //Activity function
     public function CreateActivity(Request $request){
        $request->validate([
            'content' => 'required|string',
            'year' => 'required',
            'date' => 'required',
            'image' => 'required',
        ]);

        

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
     
        $allowedfileExtension=['pdf','jpg','png','pdf'];
        $files = $request->file('image'); 
        $errors = [];
     
        foreach ($files as $file) {      
     
            $extension = $file->getClientOriginalExtension();
     
            $check = in_array($extension,$allowedfileExtension);
     
            if($check) {
                foreach($request->fileName as $mediaFiles) {

                    $Activity=new activity;
                    $Activity->content = $request->content;
                    $Activity->year = $request->year;
                    $Activity->date = $request->date;
                    $nums=rand(1,1000);
                    $filename= date('YmdHis').$nums.$mediaFiles->getClientOriginalName();
                    $file-> move(public_path('Images/Activity'), $filename);
                    $Activity->image=$filename;
                    $Activity->save();

                }
            } else {
                return response()->json(['invalid_file_format'], 422);
            }
     
            return response()->json(['file_uploaded'], 200);
     
        }

    

    }



}
