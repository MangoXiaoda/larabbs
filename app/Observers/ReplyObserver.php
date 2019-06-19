<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        $reply->content = clean($reply->content, 'user_topic_body');
    }

    public function updating(Reply $reply)
    {
        //
    }

    // 创建评论时 更新评论数
    public function created(Reply $reply)
    {
        $reply->topic->updateReplyCount();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    // 删除评论时 更新评论数
    public function deleted(Reply $reply)
    {
        // if ($reply->topic->reply_count > 0) {
        //     $reply->topic->decrement('reply_count', 1);
        // }
        $reply->topic->updateReplyCount();
    }
}
