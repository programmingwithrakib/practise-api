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
        $data = Helper::ReadMarkdownFile('/todo/get-data.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Get Data]';
        return view ('markdown', compact('content', 'title'));
    }

    public function store()
    {
        $data = Helper::ReadMarkdownFile('/todo/store.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Store Data]';
        return view ('markdown', compact('content', 'title'));
    }
    public function update()
    {
        $data = Helper::ReadMarkdownFile('/todo/update.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Update Data]';
        return view ('markdown', compact('content', 'title'));
    }

    public function delete()
    {
        $data = Helper::ReadMarkdownFile('/todo/delete.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Delete Data]';
        return view ('markdown', compact('content', 'title'));
    }

    public function show()
    {
        $data = Helper::ReadMarkdownFile('/todo/show.md');
        $parsedown = new Parsedown();
        $content = $parsedown->text($data);
        $title = 'Todo App [Show Data]';
        return view ('markdown', compact('content', 'title'));
    }
}
