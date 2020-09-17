<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        echo(PHP_EOL);

        $this->actingAs(\App\User::make([
            'name'  => 'USER NAME 1',
            'email' => 'user1@example.com',
        ]));

        echo('WEB     GUARD:  USER NAME 1 = ' . (\Auth::guard('web')    ->user()->name ?? 'NOAUTH') . PHP_EOL);
        echo('SANCTUM GUARD:  USER NAME 1 = ' . (\Auth::guard('sanctum')->user()->name ?? 'NOAUTH') . PHP_EOL);

        $this->actingAs(\App\User::make([
            'name'  => 'USER NAME 2',
            'email' => 'user2@example.com',
        ]));

        echo('WEB     GUARD:  USER NAME 2 = ' . (\Auth::guard('web')    ->user()->name ?? 'NOAUTH') . PHP_EOL);
        echo('SANCTUM GUARD:  USER NAME 2 = ' . (\Auth::guard('sanctum')->user()->name ?? 'NOAUTH') . PHP_EOL);


        $this->assertTrue(TRUE);
    }
}
