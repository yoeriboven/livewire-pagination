<?php

namespace App\Http\Livewire;

use App\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class ShowComments extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.show-comments', [
            'comments' => Comment::paginate(10)
        ]);
    }
}
