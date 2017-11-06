<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
    protected $topic;

    /**
     * TopicsController constructor.
     * @param $topic
     */
    public function __construct($topic)
    {
        $this->topic = $topic;
    }

    public function index()
    {
        return view('topics.index', compact('topics'));
    }
}
