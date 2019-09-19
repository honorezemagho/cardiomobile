<?php

namespace App\Widgets;

use App\Transaction;
use Arrilot\Widgets\AbstractWidget;

class RecentMedecinDisponibility extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [

    ];

    public $reloadTimeout = 10;

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.recent_medecin_disponibility', [
            'config' => $this->config,

        ]);
    }
}
