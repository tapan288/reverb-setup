<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }

    #[On('echo:dashboard,OrderShipped')]
    public function dump($payload)
    {
        dd($payload);
    }
}
