<?php

namespace  App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class CommentPersister implements DataPersisterInterface {

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public function supports($data): bool
    {
        return $data instanceof Comment;
    }

    public function persist($data)
    {
        $data->setCreatedAt(new \DateTime());
        $data->setUpdateAt(new \DateTime());
        $this->em->persist($data);
        $this->em->flush();
    }

    public function remove($data)
    {
        $this->em->remove($data);
        $this->em->flush();
    }
}
