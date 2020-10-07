<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class AddComment extends Component
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $post_id;
    /**
     * @var int
     */
    public $parent_id;
    /**
     * @var string
     */
    public $comment_composing_box_id;
    /**
     * @var string
     */
    public $preview_box_id;
    /**
     * @var string
     */
    public $target_id;


    /**
     * @var array
     */
    protected $rules = [
        'content' => 'required',
    ];
    /**
     * @var array
     */
    protected $messages = [
        'content.required' => '评论不能为空！',
    ];

    public function mount(int $postId, CommentModel $comment,int $time = 0): void
    {
        $this->post_id                  = $postId;
        $this->parent_id                = empty($comment->id) ? 0 : ($comment->parent_id ? $comment->parent_id : $comment->id);
        $this->target_id                = empty($comment->id) ? 0 : $comment->id;
        $this->content                  = ($time > 0 && !empty($comment->user)) ? "@" . $comment->user->name . "：" : '';
        $this->comment_composing_box_id = 'comment-composing-box-' . Str::random(10);
        $this->preview_box_id           = 'preview-box' . Str::random(10);
    }

    public function submit(): void
    {
        if (Auth::guest()) {
            $errors = $this->getErrorBag();
            $errors->add('content', '用户需要登陆！');
        } else {
            $validatedData = $this->validate();
            $data          = [
                'content'   => $validatedData['content'],
                'user_id'   => Auth::user()->id,
                'parent_id' => $this->parent_id,
                'post_id'   => $this->post_id,
                'target_id' => $this->target_id
            ];

            CommentModel::create($data);

            $this->reset('content');

            $this->emitTo('show-comment', 'create', $this->post_id);

            session()->flash('message', '添加评论成功！');
        }
    }


    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.add-comment');
    }
}
