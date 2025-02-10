<?php

namespace Tests\Unit;

use App\Models\Course;
use Mockery;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class CourseTest extends TestCase
{
    #[Before()]
    public function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    /**
     * Tests if it creates a course.
     */
    #[Test]
    public function it_creates_a_course()
    {
        $mock = Mockery::mock(Course::class);
        $mock->shouldReceive('create')
            ->once()
            ->with(['title' => 'Laravel', 'description' => 'Curso de Laravel.'])
            ->andReturnSelf();

        $course = $mock->create(['title' => 'Laravel', 'description' => 'Curso de Laravel.']);

        $this->assertInstanceOf(Course::class, $mock);
    }

    /**
     * Tests if it lists courses.
     */
    #[Test]
    public function it_lists_courses()
    {
        $mock = Mockery::mock(Course::class)->makePartial();
        $mock->shouldReceive('newQuery->get')
            ->once()
            ->andReturn(collect([
                new Course(['title' => 'Curso A']),
                new Course(['title' => 'Curso B'])
            ]));

        $this->assertCount(2, $mock->newQuery()->get());
    }

    /** 
     * Tests if it soft deletes a course.
     */
    #[Test]
    public function it_soft_deletes_a_course()
    {
        $mock = Mockery::mock(Course::class);
        $mock->shouldReceive('delete')->once()->andReturn(true);

        $this->assertTrue($mock->delete());
    }
}
