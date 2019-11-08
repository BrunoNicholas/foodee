<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('home');
	}

	public function about()
	{
		return view('web.about');
	}

	public function contact()
	{
		return view('web.contact');
	}

	public function careers()
	{
		return view('web.careers');
	}

	public function faq()
	{
		return view('web.more.faq');
	}

	public function help()
	{
		return view('web.more.help');
	}

	public function privacy()
	{
		return view('web.more.privacy');
	}

	public function terms()
	{
		return view('web.more.terms');
	}

}
