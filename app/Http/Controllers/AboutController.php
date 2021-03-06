<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{

	public function getView($about_id)
	{
		$abouts = About::find($about_id);
		return view('admin.about.view', ['abouts' => $abouts]);
	}

	public function getUpdate($about_id)
	{
		$abouts = About::find($about_id);
		return view('admin.about.edit', ['abouts' => $abouts]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120'
		]);

		$abouts = About::find($request['about_id']);
		$abouts->name = $request['name'];
		$abouts->description = $request['description'];
		$abouts->update();

		return redirect()->route('admin.about.view', ['about_id' => $request['about_id']])->with(['success' =>  $request['name']. 
			' succesfully updated']); 
	}

}
?>