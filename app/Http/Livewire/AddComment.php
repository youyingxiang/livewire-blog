<?php

namespace App\Http\Livewire;

use App\Models\CommentModel;
use Illuminate\Support\Facades\Auth;
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
        $this->postId   = $postId;
        $this->parentId = $parentId;
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

        $this->emitTo('getComments','create');

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
