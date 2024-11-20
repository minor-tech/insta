<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PrimaryButton extends Component
{
    public $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function render()
    {
        return view('components.primary-button'); // points to `resources/views/components/primary-button.blade.php`
    }
}
