<?php

namespace OCA\Reporting\Settings;

use OCA\Reporting\AppInfo\Application;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\BackgroundJob\IJobList;
use OCP\IAppConfig;
use OCP\IDateTimeFormatter;
use OCP\IL10N;
use OCP\Settings\ISettings;

class AdminSettings implements ISettings
{

  /** @var String */
  private $appid;

  /** @var IAppConfig */
  private $config;

  /** @var IL10N */
  private $l;

  /**
   * Admin constructor.
   *
   * @param IConfig $config
   * @param IL10N $l
   * @param IDateTimeFormatter $dateTimeFormatter
   * @param IJobList $jobList
   */
  public function __construct(
    IAppConfig $config,
    IL10N $l,
  ) {
    $this->appid = Application::APP_ID;
    $this->config = $config;
    $this->l = $l;
  }

  /**
   * @return TemplateResponse
   */
  public function getForm()
  {
    $parameters = [
      'appid' => $this->appid,
    ];

    return new TemplateResponse($this->appid, 'admin', $parameters);
  }

  /**
   * The section ID, e.g. 'sharing'
   *
   * @return string
   */
  public function getSection()
  {
    return $this->appid;
  }

  /**
   * Whether the form should be rather on the top or bottom of
   * the admin section. The forms are arranged in ascending order of the
   * priority values. It is required to return a value between 0 and 100.
   *
   * @return int
   */
  public function getPriority()
  {
    return 0;
  }
}
