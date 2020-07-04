<?php

namespace App\GraphQL\Queries;

class Search
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return \App\Book::where('author', 'like', '%'.$args['search'].'%')->get();
    }
}
