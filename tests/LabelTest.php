<?php
use Dyon\Flatstrapper\Label;

class LabelTest extends FlatstrapperWrapper
{
  // Matchers ------------------------------------------------------ /

  private function createMatcher($class)
  {
    $class = ($class == 'normal') ? null : ' label-'.$class;

    return array(
      'tag' => 'span',
      'attributes' => array('class' => 'foo label'.$class),
      'content' => 'foo',
    );
  }

  // Data providers ------------------------------------------------ /

  public function classes()
  {
    return array(
      array('normal'),
      array('important'),
      array('info'),
      array('inverse'),
      array('success'),
      array('warning'),
    );
  }

  // Tests --------------------------------------------------------- /

  public function testCustom()
  {
    $label = Label::custom('success', 'foo', $this->testAttributes);
    $match = $this->createMatcher('success');

    $this->assertHTML($match, $label);
  }

  /**
   * @dataProvider classes
   */
  public function testStatic($class)
  {
    $label = Label::$class('foo', $this->testAttributes);
    $match = $this->createMatcher($class);

    $this->assertHTML($match, $label);
  }
}
