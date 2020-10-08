<?php

namespace App\Observers;

use App\Mail\CommentReplyEmail;
use App\Models\CommentModel;
use Illuminate\Support\Facades\Mail;

class CommentObserver
{
    /**
     * Handle the comment model "created" event.
     *
     * @param  \App\Models\CommentModel $commentModel
     * @return void
     */
    public function created(CommentModel $commentModel): void
    {
        if ($commentModel->target_id) {
            $message = (new CommentReplyEmail($commentModel))->onQueue(config('queue.queue_name.low'));
            Mail::to($commentModel->target->user)->queue($message);
        }
    }

    /**
     * Handle the comment model "updated" event.
     *
     * @param  \App\Models\CommentModel $commentModel
     * @return void
     */
    public function updated(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "deleted" event.
     *
     * @param  \App\Models\CommentModel $commentModel
     * @return void
     */
    public function deleted(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "restored" event.
     *
     * @param  \App\Models\CommentModel $commentModel
     * @return void
     */
    public function restored(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "force deleted" event.
     *
     * @param  \App\Models\CommentModel $commentModel
     * @return void
     */
    public function forceDeleted(CommentModel $commentModel)
    {
        //
    }
}
