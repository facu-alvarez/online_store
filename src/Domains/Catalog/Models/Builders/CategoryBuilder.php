<?php

declare(strict_types=1);

namespace Domains\Catalog\Models\Builders;

use Domains\Catalog\Models\Builders\Shared\HasActiveScope;
use Illuminate\Database\Eloquent\Builder;

class CategoryBuilder extends Builder
{
    use HasActiveScope;
}
