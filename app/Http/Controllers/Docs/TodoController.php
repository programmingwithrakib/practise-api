<?php

namespace App\Http\Controllers\Docs;

use App\Http\Controllers\Controller;
use App\Utils\Helper;
use Parsedown;
use League\CommonMark\CommonMarkConverter;

class TodoController extends Controller
{
    public function index()
    {
        $data = Helper::ReadMarkdownFile('/todo.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        return view ('markdown', compact('content'));
    }
}
