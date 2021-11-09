<?php
namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class HelloTest extends TestCase
{
public function testHello()
{
$this->assertTrue(true);
$response = $this->get('/');
$response->assertStatus(302);  //リダイレクトできることを確認
$response = $this->get('/attendance');
$response->assertStatus(302);　　//リダイレクトできることを確認
$response = $this->get('/register');
$response->assertStatus(200);　　//アクセスできることを確認
$response = $this->get('/login');
$response->assertStatus(200);  //アクセスできることを確認
}
}
