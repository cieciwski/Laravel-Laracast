<?php

use App\Models\User;

it('registers a user', function () {
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'example@example.com')
        ->fill('password', 'password321')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::count())->toBe(1);

    $this->assertAuthenticated();
});
