<?php

namespace Tests;

use Patterns\Behavioral\Observer\User;
use Patterns\Behavioral\Observer\UserObserver;

class ObserverTest extends BaseTestCase
{
    public function testUserSaveCallsObserversUpdateMethod()
    {
        $userObserver = $this->getMockBuilder(UserObserver::class)->getMock();
        $userObserver->expects($this->once())->method('update');

        $user = new User();
        $user->attach($userObserver);
        $user->save();
    }
}
