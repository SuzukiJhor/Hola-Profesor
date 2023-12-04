<?php 

use App\Models\User;
use App\Models\Question;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it ('should list all the question', function () {

    //Arrange / Criar algumas perguntas
    $user  = User::factory()->create();
    $questions = Question::factory()->count(5)->create();
    actingAs($user);

    //Act / Acessar a rota
    $response = get(route('dashboard'));


    //Assert /Verificar se a lista de pergunta esra sendo mostrada


    foreach ($questions as $q) {
        $response->assertSee($q->question);
    }
});