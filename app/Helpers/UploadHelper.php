<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class UploadHelper
{

    public function createFolderIfNotExists(string $folder)
    {
        if (!Storage::exists('public/' . $folder)) {
            Storage::makeDirectory('public/' . $folder);
        }
    }

    public function deleteFileIfExists(string $folder, string $filename)
    {
        if (Storage::exists('public/' . $folder . '/' . $filename)) {
            Storage::delete('public/' . $folder . '/' . $filename);
        }
    }


    public function saveFile($file, string $folder)
    {
        $name = time();
        $path =  $name . "." . $file->extension();
        $file->storeAs('public/' . $folder . '/', $path);

        return $path;
    }

    public function updateFile($file, string $oldfile = null, string $folder)
    {
        $name = time();
        $path =  $name . "." . $file->extension();
        if ($oldfile != null) {
            $this->deleteFileIfExists($folder, $oldfile);
        }
        $file->storeAs('public/' . $folder . '/', $path);

        return $path;
    }
}
