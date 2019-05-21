<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    // 当数据保存时更新 excerpt 字段
    public function saveing(Topic $topic)
    {
       $topic->excerpt = make_excerpt($topic->body);
    }



}
