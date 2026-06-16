<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PerPage extends Component
{
    public string $name = 'per_page';
    public int $value;
    public array $options = [5, 10, 25, 50, 100];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->value = request('per_page', 10);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.per-page');
    }
}
