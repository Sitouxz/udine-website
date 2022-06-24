<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Card extends Component
{
    public $type;
    public $responden;
    public $timecreated;
    public $comments;
    public $rating;
    public $mealtime;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $responden, $timecreated, $comments, $rating, $mealtime)
    {
        $this->type = $type;
        $this->responden = $responden;
        $this->timecreated = $timecreated;
        $this->comments = $comments;
        $this->rating = $rating;
        $this->mealtime = $mealtime;
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

    public function boot() {
        // Blade::componentNamespace('resource\\views\\components', 'card');
    }
}