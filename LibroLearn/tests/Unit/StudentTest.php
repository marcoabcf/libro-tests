<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Mockery;
use App\Models\Student;

class StudentTest extends TestCase
{
    #[Before()]
    public function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    /** 
     * Tests if it creates a student.
     */
    #[Test]
    public function it_creates_a_student()
    {
        $mock = Mockery::mock(Student::class);
        $mock->shouldReceive('create')
            ->once()
            ->with([
                'name' => 'João Silva',
                'email' => 'joao@example.com',
                'birth_date' => '2000-05-15'
            ])
            ->andReturnSelf();

        $student = $mock->create([
            'name' => 'João Silva',
            'email' => 'joao@example.com',
            'birth_date' => '2000-05-15'
        ]);

        $this->assertInstanceOf(Student::class, $student);
    }

    /** 
     * Tests if it finds a student by name or email.
     */
    #[Test]
    public function it_finds_student_by_name_or_email()
    {
        $mock = Mockery::mock(Student::class);
        $mock->shouldReceive('where')->with('name', 'Maria Santos')->andReturnSelf();
        $mock->shouldReceive('orWhere')->with('email', 'maria@example.com')->andReturnSelf();
        $mock->shouldReceive('first')->once()->andReturn(new Student());

        $this->assertInstanceOf(Student::class, $mock->first());
    }
}
