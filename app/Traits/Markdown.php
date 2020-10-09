<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2020/10/4
 * Time: 3:22 PM.
 */

namespace App\Traits;

use App\Extensions\Parsedown;
use GrahamCampbell\Security\Facades\Security;

trait Markdown
{
    public function toHtml(string $content): string
    {
        return str_replace('<pre><code>', '<pre><code class=" language-php">', Security::clean(Parsedown::instance()->parse($content)));
    }
}
