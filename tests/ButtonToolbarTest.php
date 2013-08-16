<?php
use Dyon\Flatstrapper\ButtonToolbar;

class ButtonToolbarTest extends FlatstrapperWrapper
{
  public function testOpen()
  {
    $open = ButtonToolbar::open($this->testAttributes);
    $matcher = array(
      'tag' => 'div',
      'attributes' => array(
        'class'    => 'foo btn-toolbar',
        'data-foo' => 'bar',
      ),
    );

    $this->assertHTML($matcher, $open);
  }

  public function testClose()
  {
    $close = ButtonToolbar::close();

    $this->assertEquals('</div>', $close);
  }
}
