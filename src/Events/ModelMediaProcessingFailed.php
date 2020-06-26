<?php

namespace AhmedAliraqi\LaravelMediaUploader\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Events\Dispatchable;

class ModelMediaProcessingFailed
{
    use Dispatchable, SerializesModels;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    /**
     * Create a new event instance.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
