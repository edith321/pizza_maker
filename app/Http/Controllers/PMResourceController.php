<?php

namespace App\Http\Controllers;

use App\Models\PMResources;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class PMResourceController extends Controller
{
    /**
     * Uploads file data
     * Creates generates file path
     *
     * @param UploadedFile $file
     * @return mixed
     */
    public function upload(UploadedFile $file)
    {
        $data = [

            "size" => $file->getSize(),
            "mime_type" => $file->getMimeType(),

        ];
        $path = 'upload/' . date("Y/m/d");

        $fileName = Carbon::now()->timestamp . '_' . $file->getClientOriginalName();

        $file->move(public_path($path), $fileName);

        $data["path"] = $path . $fileName;

        return PMResources::create($data);

    }
}
