<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Render the component view.
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
