<?php

namespace HumanResources\Http\Controllers;

use Auth;
use File;
use Storage;
use Validator;
use HumanResources\User;
use Illuminate\Http\Request;
use HumanResources\Http\Requests;
use HumanResources\Http\Requests\CVUploadRequest;

class FileUploaderController extends Controller
{
    public function uploadFileToLocalStorage(CVUploadRequest $request)
    {
        $file = $request->file('app_cv');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension; 
        $uploaded = $this->uploadToAws($filename, $file);  // Upload to aws 

        if ($uploaded) {
            User::where('id', Auth::user()->id)
            ->update([
                'cv_url' => 'https://s3-us-west-2.amazonaws.com/laztopaz/cv/'.$filename,
            ]);

            return redirect('/dashboard/profile')->with('success', 'Your CV was upload successfully');
        }

         return redirect('/dashboard/profile')->with('error', 'Oops! something went wrong!');
        
    }

    public function uploadToAws($filename, $file)
    {
      $s3 = Storage::disk('s3');
      $filePath = '/cv/' . $filename;
      return $s3->put($filePath, file_get_contents($file), 'public');

    }
}
