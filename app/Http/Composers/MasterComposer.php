<?php

use Illuminate\Contracts\View\View;

class MasterComposer {

  public function compose(View $view)
  {
  $view->with('variable', 'myvariable');
  }
}