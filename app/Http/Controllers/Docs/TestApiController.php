<?php

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use App\Utils\Helper;
use Illuminate\Http\Request;
use Parsedown;

class TestApiController extends Controller
{
    public function index()
    {
        $data = Helper::ReadMarkdownFile('/test-api/index.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Get Data]';
        return view ('markdown', compact('content', 'title'));
    }
}
