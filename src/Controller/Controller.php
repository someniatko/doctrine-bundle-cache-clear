<?php declare(strict_types = 1);

namespace App\Controller;

use App\ErrorTrigger\ErrorTriggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class Controller extends AbstractController
{
    public function action(ErrorTriggerInterface $trigger): void
    {
    }
}
