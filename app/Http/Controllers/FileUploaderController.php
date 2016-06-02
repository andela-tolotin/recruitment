<?php

namespace HumanResources\Http\Controllers;

use File;
use Storage;
use Validator;
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
            return redirect('/dashboard/profile')->with('success', $filename);
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
