<?php
include '_start.php';

use Dyon\Flatstrapper\Alert;

class AlertTest extends FlatstrapperWrapper
{
  // Matchers ------------------------------------------------------ /

  private function createMatcher($class, $close = true)
  {
    if ($close) {
      return array(
        'tag' => 'div',
        'attributes' => array(
          'data-foo' => 'bar',
          'class' => 'foo alert alert-'.$class),
        'content' => 'foo',
        'child' => array(
          'tag' => 'a',
          'attributes' => array(
            'class' => 'close',
            'data-dismiss' => 'alert',
            'href' => '#',
          ),
        ),
      );
    } else {
      return array(
        'tag' => 'div',
        'attributes' => array(
          'data-foo' => 'bar',
          'class' => 'foo alert alert-'.$class),
        'content' => 'foo',
      );
    }
  }

  // Data providers  ----------------------------------------------- /

  public function classes()
  {
    return array(
      array('danger'),
      array('error'),
      array('info'),
      array('success'),
      array('warning'),
    );
  }

  // Tests --------------------------------------------------------- /

  public function testCanCreateCustomAlerts()
  {
    $alert = Alert::custom('success', 'foo', $this->testAttributes);
    $match = $this->createMatcher('success');

    $this->assertHTML($match, $alert);
  }

  public function testOrderOfChildrenIsCorrect()
  {
    $alert = Alert::error('foobar')->render();

    $this->assertEquals('<div class="alert-error alert"><a href="#" class="close" data-dismiss="alert">&times;</a>foobar</div>', $alert);
  }

  public function testCanCreateCustomAlertsWithoutClose()
  {
    $alert = Alert::custom('success', 'foo', $this->testAttributes)->open();
    $match = array(
      'attributes' => array('data-foo' => 'bar', 'class' => 'foo alert alert-success'),
      'content'    => 'foo',
      'tag'        => 'div',
    );

    $this->assertHTML($match, $alert);
  }

  public function testCanUseConcatenatedStaticOpener()
  {
    $alert = Alert::open_success('foo', $this->testAttributes);
    $match = $this->createMatcher('success', false);

    $this->assertHTML($match, $alert);
  }

  public function testCanUseStaticBlockOpener()
  {
    $alert = Alert::open_block_success('foo', $this->testAttributes);
    $match = $this->createMatcher('success', false);
    $match['attributes']['class'] .= ' alert-block';

    $this->assertHTML($match, $alert);
  }

  public function testCanDoWhateverTheFuckIWant()
  {
    $alert = Alert::foo_bar('foo', $this->testAttributes);
    $match = $this->createMatcher('foo-bar');

    $this->assertHTML($match, $alert);
  }

  /**
   * @dataProvider classes
   */
  public function testCanUseStaticOpener($class)
  {
    $alert = Alert::$class('foo', $this->testAttributes);
    $match = $this->createMatcher($class);

    $this->assertHTML($match, $alert);
  }
}
