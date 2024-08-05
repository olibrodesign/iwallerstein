<?php

declare(strict_types=1);

namespace ACP\Filtering\Table;

use AC\Registerable;
use ACP\Filtering\View\FilterContainer;

class Comment implements Registerable
{

    private $column_name;

    public function __construct(string $column_name)
    {
        $this->column_name = $column_name;
    }

    public function register(): void
    {
        add_action('restrict_manage_comments', [$this, 'render']);
    }

    public function render(): void
    {
        echo new FilterContainer($this->column_name);
    }

}