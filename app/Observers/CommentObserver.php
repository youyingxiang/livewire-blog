<?php

namespace App\Observers;

use App\Models\CommentModel;
use Illuminate\Support\Facades\Cache;

class CommentObserver
{
    /**
     * Handle the comment model "created" event.
     *
     * @param  \App\Models\CommentModel  $commentModel
     * @return void
     */
    public function created(CommentModel $commentModel)
    {

      
    }

    /**
     * Handle the comment model "updated" event.
     *
     * @param  \App\Models\CommentModel  $commentModel
     * @return void
     */
    public function updated(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "deleted" event.
     *
     * @param  \App\Models\CommentModel  $commentModel
     * @return void
     */
    public function deleted(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "restored" event.
     *
     * @param  \App\Models\CommentModel  $commentModel
     * @return void
     */
    public function restored(CommentModel $commentModel)
    {
        //
    }

    /**
     * Handle the comment model "force deleted" event.
     *
     * @param  \App\Models\CommentModel  $commentModel
     * @return void
     */
    public function forceDeleted(CommentModel $commentModel)
    {
        //
    }
}
