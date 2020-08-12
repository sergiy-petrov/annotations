<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures;

use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;

/**
 * @Route("/someprefix")
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ControllerWithParentClass extends AbstractController
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }
}
