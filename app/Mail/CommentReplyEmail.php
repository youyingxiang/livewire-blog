<?php

namespace App\Mail;

use App\Models\CommentModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentReplyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var CommentModel
     */
    public $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CommentModel $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = route('home.detail', $this->comment->post_id).'#comment-'.$this->comment->id;
        $subject = ($this->comment->user->name ?? '').' 回复 '.$this->comment->post->title;

        return $this->subject($subject)->markdown('emails.comment.reply', compact('url'))->onQueue(config('queue.queue_name.low'));
    }
}
