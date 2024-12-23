<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\TodoStoreRequest;
use App\Http\Requests\Todo\TodoUpdateRequest;
use App\Models\Todo;
use App\Utils\Helper;

class TodoController extends Controller
{
    public function index(){
        $data = Todo::select('id', 'title', 'description', 'completed')->customPaginate(5);
        return Helper::ApiResponse('Fetch Successfully', $data);
    }

    public function store(TodoStoreRequest $request){
        $data = $request->validated();
        $todo = Todo::create($data);
        return Helper::ApiResponse('Store Successfully', $todo);
    }

    public function update(TodoUpdateRequest $request, $id){
        $todo = Todo::findOrFail($id);
        $data = $request->validated();
        $todo->update($data);
        return Helper::ApiResponse('Updated Successfully', $todo);
    }

    public function delete($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return Helper::ApiResponse('Deleted Successfully', $todo);
    }
}
