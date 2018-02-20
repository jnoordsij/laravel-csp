<?php

namespace Spatie\Csp\Policies;

use Spatie\Csp\Directive;

class Basic extends Policy
{
    public function configure()
    {
        $this
            ->addDirective(Directive::CONNECT, 'self')
            ->addDirective(Directive::DEFAULT, 'self')
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::IMG, 'self')
            ->addDirective(Directive::MEDIA, 'self')
            ->addDirective(Directive::SCRIPT, 'self')
            ->addDirective(Directive::STYLE, 'self')
            ->addDirective(Directive::OBJECT, 'none')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addNonceForDirective(Directive::STYLE);
    }
}
