<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class StatsWidget extends Component
{
    public function render()
    {
        return view('livewire.dashboard.stats-widget', [
            'stats' => [
                'users' => 150,
                'posts' => 45,
                'comments' => 230,
            ],
        ]);
    }
    
}
