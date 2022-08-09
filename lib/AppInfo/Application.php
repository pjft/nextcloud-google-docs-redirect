<?php
declare(strict_types=1);

namespace OCA\GoogleDocsRedirect\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCA\Files\Event\LoadAdditionalScriptsEvent;
use OCA\GoogleDocsRedirect\Listener\LoadScriptsListener;

class Application extends App implements IBootstrap {
    public const APP_NAME = 'googledocsredirect';

    public function __construct() {
        parent::__construct(self::APP_NAME);
    }

    public function register(IRegistrationContext $context): void {
        $context->registerEventListener(LoadAdditionalScriptsEvent::class, LoadScriptsListener::class);
    }

    public function boot(IBootContext $context): void
    {
    }
}
