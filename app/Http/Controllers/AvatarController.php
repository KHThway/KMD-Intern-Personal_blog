<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AvatarController extends Controller
{
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'avatar' => ['image'],
        ]);

        if ($request->file('avatar') ?? false) {
            $image = $request->file('avatar');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/avatars', $filename);
            $validated['avatar'] = $filename;
        }

        $avatar = User::find($id)->update($validated);

        return view('profile.edit', compact('avatar'));
    }
}
