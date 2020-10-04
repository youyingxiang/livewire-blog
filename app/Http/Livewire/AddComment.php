<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Illuminate\Http\Request;
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
    public $postId;
    /**
     * @var int
     */
    public $parentId;
    /**
     * @var string
     */
    public $comment_composing_box_id;
    /**
     * @var
     */
    public $preview_box_id;
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

    public function mount(int $postId, int $parentId): void
    {
        $this->postId                   = $postId;
        $this->parentId                 = $parentId;
        $this->comment_composing_box_id = 'comment-composing-box-' . Str::random(10);
        $this->preview_box_id           = 'preview-box' . Str::random(10);
    }

    public function submit(): void
    {
        $validatedData = $this->validate();
        $data          = [
            'content'   => $validatedData['content'],
            'user_id'   => Auth::user()->id,
            'parent_id' => $this->parentId,
            'post_id'   => $this->postId,
        ];

        CommentModel::create($data);

        $this->reset('content');

        $this->emitTo('showComment', 'create', $this->postId, 0);
//        $this->emitSelf('create',$this->postId, 0);

        session()->flash('message', '添加评论成功！');
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.add-comment');
    }
}
