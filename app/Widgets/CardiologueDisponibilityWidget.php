<?php

namespace App\Widgets;

use App\Available;
use Arrilot\Widgets\AbstractWidget;

class CardiologueDisponibilityWidget extends AbstractWidget
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

    public $reloadTimeout = 10;


    public function run()
    {
        //
        $disponibility = Available::where('type_id', 1)
            ->where('speciality_id', 1)
            ->where('expires', 0)
            ->orderBy('datetime', 'asc')
            ->simplePaginate(5)
            ->onEachSide(7);

          /*  $disponibility->withPath('/urgence/receiving/clinique/save');*/

        $locale = 'fr_FR';

        return view('widgets.cardiologue_disponibility_widget', [
            'config' => $this->config,
            'disponibility' => $disponibility,
            'locale' => $locale,
        ]);
    }
}
