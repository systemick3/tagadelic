
<?php

require_once "TagadelicTagTest.php";

/**
 * Class TagadelicTagMethodsTest
 *
 * Test-group for testing the output-method __ToString from TagadelicTagTest.
 *   This is a functional group, with lots of duplication, hence it is extracted
 *   to its own Test.
 */
class TagadelicTagMethodsTest extends TagadelicTagTest {
  /**
   * @covers TagadelicTag::get_id
   * @todo   Implement testGet_id().
   */
  public function testGet_id() {
    $this->assertSame(42, $this->object->get_id());
  }

  /**
   * @covers TagadelicTag::get_name
   * @todo   Implement testGet_name().
   */
  public function testGet_name() {
    $this->assertSame("blackbeard", $this->object->get_name());
  }

  /**
   * @covers TagadelicTag::get_description
   * @todo   Implement testGet_description().
   */
  public function testGet_description() {
    $this->object->set_description("Foo Bar");
    $this->assertSame("Foo Bar", $this->object->get_description());
  }

  /**
   * @covers TagadelicTag::get_weight
   * @todo   Implement testGet_weight().
   */
  public function testGet_weight() {
    $this->object->set_weight(123);
    $this->assertSame(123, $this->object->get_weight());
  }

  /**
   * @covers TagadelicTag::set_description
   * @todo   Implement testSet_description().
   */
  public function testSet_description() {
    $this->object->set_description("Foo Bar");
    $this->assertAttributeSame("Foo Bar", "description", $this->object);
  }

  /**
   * @covers TagadelicTag::set_link
   * @todo   Implement testSet_link().
   */
  public function testSet_link() {
    $this->object->set_link("tag/blackbeard");
    $this->assertAttributeSame("tag/blackbeard", "link", $this->object);
  }

  /**
   * @covers TagadelicTag::force_dirty
   * @todo   Implement testForce_dirty().
   */
  public function testForce_dirty() {
    $this->object->force_dirty();
    $this->assertAttributeSame(TRUE, "dirty", $this->object);
  }

  /**
   * @covers TagadelicTag::force_clean
   * @todo   Implement testForce_clean().
   */
  public function testForce_clean() {
    $this->object->force_clean();
    $this->assertAttributeSame(FALSE, "dirty", $this->object);
  }

  /**
   * @covers TagadelicTag::distributed
   * @todo   Implement testDistributed().
   */
  public function testDistributed() {
    $this->assertSame(log(2), $this->object->distributed());
  }
}
