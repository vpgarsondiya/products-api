<?php
// api/src/Controller/CreateBookPublication.php
namespace App\Controller;

use App\Entity\Book;
use App\Entity\Manufacturer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]

class TaskController extends AbstractController
{
    private $manufacturerHandler;

    public function __construct()
    {
        $this->bookPublishingHandler;
    }

    public function __invoke(Manufacturer $book): Manufacturer
    {
        $this->bookPublishingHandler->handle($book);

        return $book;
    }
}