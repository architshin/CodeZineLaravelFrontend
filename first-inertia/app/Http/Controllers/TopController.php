<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TopController extends Controller
{
	public function index() {
		$data["name"] = "しんちゃん";
		// return Inertia::render("top/Index", $data);
		return inertia("top/Index", $data);
	}
}
