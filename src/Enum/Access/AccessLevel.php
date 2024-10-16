<?php

namespace OopExercises\Enum\Access;

enum AccessLevel: string
{
    case Admin = 'admin';
    case Editor = 'editor';
    case Viewer = 'viewer';
}
