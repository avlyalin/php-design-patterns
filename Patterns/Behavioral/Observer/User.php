<?php

namespace Patterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User extends Model implements SplSubject
{

    protected $attributes = [
        'email',
        'firstName',
        'lastName',
    ];

    private $observers;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function save(array $attributes = [])
    {
        parent::save($attributes);
        $this->notify();
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            /** @var SplObserver $observer */
            $observer->update($this);
        }
    }

}
