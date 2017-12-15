<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Occupation;
use App\Designation;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Image;
class ProfileController extends Controller
{
    public  function showProfileForm($id){

        $occupations=Occupation::orderBy('id', 'asc')->get();
        $designations=Designation::orderBy('id', 'asc')->get();

        $profile = Profile::where('user_id', $id)->first();
        //return $profile;

        return view('admin.profile.profile',compact('profile','occupations','designations'));


    }


    public  function showTspUserProfileForm($id)
    {
        $occupations=Occupation::orderBy('id', 'asc')->get();
        $designations=Designation::orderBy('id', 'asc')->get();
        $profile = Profile::where('user_id', $id)->first();

        //return $profile;

        return view('tsp.profile.profile', [
            'profile' => $profile,
            'occupations'=>$occupations,
            'designations'=>$designations
        ]);
    }


    public  function saveProfileInfo(Request $request)
    {
        //echo "<pre>";
        //return var_dump($_POST);

        $profile = Profile::where('user_id',$request->user_id)->first();

        //return $profile;

        if(!empty($profile))
        {
            // Problem
            $profileId = $profile;

            $profileId->user_contact = $request->user_contact;
            $profileId->user_address = $request->user_address;
            $profileId->occupation_id = $request->occupation_id;
            $profileId->designation_id = $request->designation_id;

            $profileId->update();

            return redirect('/home');
        }
        else
        {
            $userImage = $request->file('user_image');
            $imageName = $userImage->getClientOriginalName();
            $directory= 'user-images/';
            $imageUrl=$directory. $imageName;
            Image::make($userImage)->save($imageUrl);

            $profile = new Profile();
            $profile->user_id = $request->user_id;
            $profile->user_contact = $request->user_contact;
            $profile->user_address = $request->user_address;
            $profile->occupation_id = $request->occupation_id;
            $profile->designation_id = $request->designation_id;
            $profile->user_image = $imageUrl;

            $profile->save();

            return redirect('/home');
        }

    }


    public  function showManageUserForm()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.profile.manage-user', ['users' => $users]);
    }


    public  function updateUserType(Request $request, $id)
    {
        $user = User::find($id);
        $user->user_type = $request->user_type;
        $user->update();

        return redirect('/profile/user')->with('message', 'User Type change successfully.');
    }

}
