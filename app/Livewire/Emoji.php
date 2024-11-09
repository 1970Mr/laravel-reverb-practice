<?php

namespace App\Livewire;

use App\Events\ReactionReceived;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Emoji extends Component
{
    public function render(): View
    {
        return view('livewire.emoji')->layout('layouts.app');
    }

    public function sendReaction($emoji): void
    {
        ReactionReceived::dispatch($emoji);
    }
}
