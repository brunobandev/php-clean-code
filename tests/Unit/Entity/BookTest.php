<?php

namespace Bookstore\Test\Unit\Entity;

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public $book;

    public function setUp(): void
    {
        $this->book = new \Bookstore\Entity\Book;
    }

    /** @test */
    public function it_should_return_book_title(): void
    {
        $this->book->setTitle('Clean Code');

        $this->assertEquals($this->book->getTitle(), 'Clean Code');
    }

    /** @test */
    public function it_should_return_book_author(): void
    {
        $this->book->setAuthor('Uncle Bob');

        $this->assertEquals($this->book->getAuthor(), 'Uncle Bob');
    }

    /** @test */
    public function it_should_return_book_resume(): void
    {
        $this->book->setResume('The book explains how to keep your code clean');

        $this->assertEquals($this->book->getResume(), 'The book explains how to keep your code clean');
    }
}
