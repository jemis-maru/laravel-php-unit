<?php

namespace Tests\Feature;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class CalculatorControllerTest extends TestCase
{
    #[Test]
    public function it_returns_sum_of_two_numbers()
    {
        $response = $this->get('/add?a=5&b=7');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 12,
            ]);
    }

    #[Test]
    public function it_returns_difference_of_two_numbers()
    {
        $response = $this->get('/subtract?a=10&b=4');

        $response->assertStatus(200)
            ->assertJson([
                'result' => 6,
            ]);
    }
}
