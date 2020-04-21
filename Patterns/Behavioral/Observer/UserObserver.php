<?php

namespace Patterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        $this->createUserApplication($subject);
    }

    private function createUserApplication($subject)
    {
        $application = new Application($subject);
        $application->save();
    }
}
