<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Emoji extends Component
{
    public function render(): View
    {
        return view('livewire.emoji')->layout('layouts.app');
    }

    public function sendReaction($emoji): void
    {
        logger($emoji);
    }
}
