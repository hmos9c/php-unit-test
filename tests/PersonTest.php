<?php


namespace Hmos9c\PhpUnitTest;


use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {

    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Sanas");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Akmal, my name is Sanas", $this->person->sayHello("Akmal"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good bye Akmal" . PHP_EOL);
        $this->person->sayGoodBye("Akmal");
    }


}