<div class="shadow-lg bg-white mt-5  py-3 px-3 lg:py-5 lg:px-5" x-data="{ show_comment: @entangle('comments_count') }"
     x-show="show_comment">
    @include('blog.comment',['comments' => $comments,'time' => 0])
</div>

