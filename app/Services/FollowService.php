<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Models\Follower;

/**
 * Class FollowService
 * @package App\Services
 */
class FollowService
{
    public function followers()
    {
        $followers = Follower::select('users.*')
            ->join('users', 'users.id', '=', 'followers.followed_id')
            ->where('following_id', auth()->id())->simplePaginate(10);

        return UserResource::collection($followers);
    }

    public function followings()
    {
        $followers = Follower::select('users.*')
            ->join('users', 'users.id', '=', 'followers.following_id')
            ->where('followed_id', auth()->id())->simplePaginate(10);

        return UserResource::collection($followers);
    }

    public function follow($id)
    {
        $id = customDecrypt($id);
        $myId = auth()->id();

        if($id == $myId) {
            return response()->json(['message' => 'You cannot follow yourself'],403);
        }

        $follow = Follower::where('following_id', $id)->where('followed_id', $myId)->first();

        if($follow) {
            $follow->delete();
        } else {
            Follower::create([
                'followed_id' => $myId,
                'following_id' => $id
            ]);
        }

        return response()->json(['message' => ($follow ? "Unfollowed" : "Followed").' successfully' ]);
    }
}
