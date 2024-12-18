<?php

test('encoder_controller_returns_successfull_response', function (){
    $this->post(
        route('encode'),
        ['url' => '']
    )
    ->assertStatus(200)
    ->assertJson();
});

test('encoder_controller_returns_error_when_data_is_not_valid', function (mixed $url) {
    $this->post(
        route('encode'),
        ['url' => $url]
    )->assertStatus(422);
})->with([
    '',
    'not valid url',
    null,
    false,
    1
]);

