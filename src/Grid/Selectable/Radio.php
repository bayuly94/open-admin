<?php

namespace OpenAdmin\Admin\Grid\Selectable;

use OpenAdmin\Admin\Grid\Displayers\AbstractDisplayer;

class Radio extends AbstractDisplayer
{
    public function display($key = '')
    {
        $value = $this->getAttribute($key);

        return <<<EOT
<input type="radio" name="item" class="form-check-input" value="{$value}"/>
EOT;
    }
}