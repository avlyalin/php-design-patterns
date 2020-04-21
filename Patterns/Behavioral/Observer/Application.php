<?php

namespace Patterns\Behavioral\Observer;

class Application extends Model
{
    /**
     * @var User
     */
    private $user;

    /**
     * Application constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

}
