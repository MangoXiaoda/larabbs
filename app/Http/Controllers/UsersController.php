<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{



    // 个人资料展示
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // 修改
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // 更新
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

}
