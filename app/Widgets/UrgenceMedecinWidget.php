<?php

namespace App\Widgets;

use App\Available;
use Arrilot\Widgets\AbstractWidget;

class UrgenceMedecinWidget extends AbstractWidget
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
    public function run()
    {
        //

        $urgence = Available::where('type_id', 1)
            ->where('speciality_id', 3)
            ->where('expires', 0)
            ->orderBy('datetime', 'asc')
            ->get();

        return view('widgets.urgence_medecin_widget', [
            'config' => $this->config,
            'urgence' => $urgence,
        ]);
    }
}
