<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Feedback as Model;

class FeedbackController extends Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->middleware('auth');
        // $this->middleware('verified');

        $this->model = $model;
    }

    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'description' => 'required|string|min:20',
        ]);

        $this->model->type = $data['type'];
        $this->model->description = $data['description'];
        $this->model->created_by = $request->user()->id;
        $this->model->save();

        return redirect('/help')->with('status', __("Thanks for your feedback! We'll read it as soon as possible."));
    }
}
