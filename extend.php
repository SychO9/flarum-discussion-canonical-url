<?php

/*
 * This file is part of sycho/discussion-canonical-url.
 *
 * Copyright (c) 2021 SychO.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SychO\DiscussionCanonical;

use Flarum\Extend;
use SychO\DiscussionCanonical\Content\Discussion;

return [
    (new Extend\Frontend('forum'))
        ->removeRoute('discussion')
        ->route('/d/{id:\d+(?:-[^/]*)?}[/{near:[^/]*}]', 'discussion', Discussion::class),
];
