<?php

namespace App\Utils;

class Helper
{
    static function ApiResponse($message, $data = null, $statusCode = 200, $success = true)
    {
        return response()->json([
            'status' => $success ? 'success' : 'error',
            'message' => $message,
            'figure' => $data,
        ], $statusCode);
    }

    public static function GetImage($path){
        return env("APP_URL").$path;
    }


    public static function FileUpload($request_key, $path){
        $uploadPath = env("APP_ENV") == "local" ? public_path($path) : base_path($path);
        if ($file = request()->file($request_key)){
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

            // Save the file path in the database
            $photoPath = request()->root()."/$path/" . $filename;
            return $photoPath;
        }
        else{
            return false;
        }
    }



    public static function RemoveFile($path){
        if($path){
            try{
                $path = explode(request()->root(), $path);
                $path = $path[1];
            }
            catch(\Exception $e){
                $path = null;
            }
        }

        $filePath = env("APP_ENV") == "local" ? public_path($path) : base_path($path);

        // Delete the file from the server
        if ($path && file_exists($filePath)) {
            unlink($filePath);
        }

    }

    static public function ReadMarkdownFile($path)
    {
        $markdownFile = resource_path('markdown/'.$path);
        // Check if the file exists
        if (!file_exists($markdownFile)) {
            abort(404, 'Markdown file not found');
        }

        // Read the content of the .md file
        return $markdownContent = file_get_contents($markdownFile);
    }
}
