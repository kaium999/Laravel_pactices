<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $descripton;
    public $paragraph;
    public $phpvalue;
    public function __construct($title,$descripton,$paragraph,$phpvalue)

    {
            $this->title=$title;
            $this->descripton=$descripton;
            $this->paragraph=$paragraph;
            $this->phpvalue=$phpvalue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
