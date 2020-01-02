<?php

namespace Drupal\hook_event_dispatcher\Event\Entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\hook_event_dispatcher\Event\EventInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class BaseEntityEvent.
 */
abstract class AbstractEntityEvent extends Event implements EventInterface {

  /**
   * The Entity.
   *
   * @var \Drupal\Core\Entity\EntityInterface
   */
  protected $entity;

  /**
   * BaseEntityEvent constructor.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The Entity.
   */
  public function __construct(EntityInterface $entity) {
    $this->entity = $entity;
  }

  /**
   * Get the Entity.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The Entity.
   */
  public function getEntity(): EntityInterface {
    return $this->entity;
  }

}