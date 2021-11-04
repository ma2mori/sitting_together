<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Mypage\Profile\EditRequest;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
	public function showProfileEditForm()
	{
		return view('mypage.profile_edit_form', [
			'user' => Auth::user(),
			'path' => Storage::disk('s3')->url('avatars'),
		]);
	}

	public function editProfile(EditRequest $request)
	{
		$user = Auth::user();

		$user->name = $request->input('name');

		if ($request->has('avatar')) {
			$file_name = $this->saveAvatar($request->file('avatar'));
			$user->avatar_file_name = $file_name;
		}

		$user->save();

		return redirect()->back()
			->with('status', 'プロフィールを変更しました。');
	}

	private function saveAvatar(UploadedFile $file)
	{
		$temp_path = $this->makeTempPath();
		Image::make($file)->fit(200, 200)->save($temp_path);
		$file_path = Storage::disk('s3')->put('/avatars', new File($temp_path), 'public');

		return basename($file_path);
	}

	private function makeTempPath()
	{
		$tmp_fp = tmpfile();
		$meta = stream_get_meta_data($tmp_fp);
		return $meta['uri'];
	}
}
