<?php
/** 
 * SPDX-Licence-Identifier: AGPL-3.0
 * SPDX-FileCopyrightText: 2024 Micke Nordin <kano@sunet.se>
 * */

declare(strict_types=1);

namespace OCA\Reporting\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap
{
  const APP_ID = 'reporting';
  public function __construct()
  {
    parent::__construct($this::APP_ID);
  }

  public function register(IRegistrationContext $c): void {}

  public function boot(IBootContext $c): void {}
}
