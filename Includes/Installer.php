<?php

namespace PSP\Includes;

class Installer
{
  function __construct()
  {
  }

  public function run()
  {
    $this->add_version();
  }

  public function add_version()
  {
    $is_installed = get_option('psp_is_installed');
    if (!$is_installed) {
      update_option('psp_is_installed', time());
    }
    update_option('psp_is_installed', PSP_VERSION);
  }
}