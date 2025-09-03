<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    public $menu, $type, $itemsMenu;
    /**
     * Create a new component instance.
     */
    public function __construct($menu, $type, $itemsMenu)
    {
        $this->menu = $menu;
        $this->type = $type;
        $this->itemsMenu = $itemsMenu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-bar');
    }
}
