<?php

namespace App\Widgets;

use App\Available;
use Arrilot\Widgets\AbstractWidget;

class PneumologueDisponibilityWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */

    public $reloadTimeout = 2;


    public function run()
    {
        //
        $disponibility = Available::where('type_id', 1)
            ->where('speciality_id', 3)
            ->where('expires', 0)
            ->orderBy('datetime', 'asc')
            ->get();

        $locale = 'fr_FR';

        return view('widgets.pneumologue_disponibility_widget', [
            'config' => $this->config,
            'disponibility' => $disponibility,
            'locale' => $locale,
        ]);
    }
}
