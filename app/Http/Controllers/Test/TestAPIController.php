<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestAPIController extends Controller
{
    public function getMethod(Request $request)
    {

        $data = $this->commonData($request);


        return [
            'message' => 'স্বাগতম! আপনি সঠিক ভাবে আমার কাছে রিকুয়েস্ট পাঠিয়েছেন। আপনি যে তথ্য গুলো পাঠিয়েছেন সেগুলো info প্রপার্টি তে আছে। ',
            'info' => $data
        ];
    }





    function commonData($request)
    {
        $data = [
            'method' => $request->method(),
            'path' => $request->path(),
        ];


        //Get Headers Data
        $header_keys = array_keys($request->header());
        $headers = [];
        foreach ($header_keys as $header_key) {
            $headers[$header_key] = $request->header($header_key);
        }

        $data['headers'] = $headers;

        // Get Query Parameter Data
        if ($query_data = $request->query()){
            $data['query'] = $query_data;
        }

        $contentType = $request->header('Content-Type');


        // Get Form Data When Method is POST
        if ($request->isMethod('POST') || $request->isMethod('PUT') || $request->isMethod('patch')) {

            if(Str::contains($contentType,'application/x-www-form-urlencoded')){
                $data['Content-Type'] = 'application/x-www-form-urlencoded';
                $data['bodyData'] = $request->all();
            }

            if (Str::contains($contentType,'multipart/form-data')){
                $data['Content-Type'] = 'multipart/form-data';
                $data['bodyData'] = $request->all();
            }

            if (Str::contains($contentType,'text/plain')){
                $data['Content-Type'] = 'text/plain';
                $data['bodyData'] = $request->getContent();
            }


            // Handle JSON Data
            if ($request->isJson()) {
                $data['bodyData'] = $request->json()->all(); // Retrieve JSON data
            }

        }

        return $data;
    }
}
