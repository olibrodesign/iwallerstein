<?php

declare(strict_types=1);

namespace ACP\Helper\Select\User;

use AC\Helper\Select\Options\Paginated;
use ACP\Helper\Select;

class PaginatedFactory
{

    public function create(
        array $args,
        LabelFormatter $formatter = null,
        GroupFormatter $group_formatter = null
    ): Paginated {
        if (null === $formatter) {
            $formatter = new LabelFormatter\UserName();
        }
        if (null === $group_formatter) {
            $group_formatter = new GroupFormatter\Role();
        }

        $users = new Query($args);

        $options = new Groups(
            new Options($users->get_copy(), $formatter),
            $group_formatter
        );

        return new Paginated(
            $users,
            $options
        );
    }

}