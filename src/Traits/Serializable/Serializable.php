<?php

namespace OopExercises\Traits\Serializable;

trait Serializable
{
    public function serialize()
    {
        return json_encode($this);
    }
}