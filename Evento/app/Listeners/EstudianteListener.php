<?php

namespace App\Listeners;

use App\Events\EstudianteRegistrado;
use App\Mail\CorreoEstudiante;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EstudianteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EstudianteRegistrado  $event
     * @return void
     */
    public function handle(EstudianteRegistrado $event)
    {
        Mail::to('director@hotmail.com')->send( new CorreoEstudiante( $event->datos ) );
    }
}
