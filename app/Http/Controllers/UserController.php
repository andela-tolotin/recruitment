<?php

namespace HumanResources\Http\Controllers;

use Auth;
use Cloudder;
use Validator;
use HumanResources\User;
use Illuminate\Http\Request;
use HumanResources\Http\Requests\UserSignupRequest;
use HumanResources\Http\Controllers\OtherUserInfoController;

class UserController extends Controller
{
    public function updateProfile(UserSignupRequest $request, OtherUserInfoController $otherUserInfo)
    {
        $user = User::where('id', '=', Auth::user()->id)
        ->update([
            'username'  => $request->input('username'),
            'email'     => $request->input('email'),
            'name'      => $request->input('name'),
        ]);

        $otherUser = $this->createOtherUserInfo($request, $otherUserInfo);

        if (!is_null($user) && $otherUser) {
            return redirect('/dashboard/profile')->with(
                'status',
                'Sucessfully updated!'
            );
        }

        return redirect('/dashboard/profile')->with(
            'status',
            'Oops! Something went wrong!'
        );
    }

    public function createOtherUserInfo($request, $otherUserInfo)
    {
        return $otherUserInfo->updateOtherUserInfo([
            'phone'          => $request->input('phone'),
            'marital_status' => $request->input('marital'),
            'address'        => $request->input('address'),
            'dateofbirth'    => $request->input('dob'),
            'gender'         => $request->input('gender'),
            'state'          => $request->input('state'),
            'city'           => $request->input('city'),
            'user_id'        => Auth::user()->id,
        ]);
    }

    /**
     * This method upload profile picture to cloudinary.
     *
     * @param  $request
     *
     * @return response
     */
    public function updateAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'picture_url' => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/profile')
            ->with('status', 'File accepted must be a jpg and not more 10MB!');
        }

        $imageUrl = $this->handleCloudinaryFileUpload($request);

        if (filter_var($imageUrl, FILTER_VALIDATE_URL)) {
            $user = User::where('id', Auth::user()->id)
            ->update(['picture_url' => $imageUrl]);

            return redirect('/dashboard/profile')
            ->with('status', 'Profile picture update successfully!');
        }

        return redirect('/dashboard/profile')->with(
            'status',
            'Oops! Something went wrong!'
        );
    }

    /**
     * This method upload image to cloudinary.
     *
     * @param $request
     *
     * @return picture url
     */
    public function handleCloudinaryFileUpload($request)
    {
        $avatar = $request->file('picture_url');
        $avatar = Cloudder::upload($avatar, null, [
            'format' => 'jpg',
            'crop'   => 'fill',
            'width'  => 250,
            'height' => 250,
        ]);

        return  Cloudder::getResult()['url'];
    }
}
