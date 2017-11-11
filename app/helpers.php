<?php

function getClass(string $alias)
{
    return [
        'u'     => App\Models\User::class,
        't'     => App\Models\Topic::class,
        'st'    => App\Models\SubTopic::class,
    ][$alias];
}

function dgc(string $alias)
{
    return getClass($alias);
}
