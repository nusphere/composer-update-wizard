<?php

declare(strict_types=1);

namespace NuBox\Composer\Update\Wizard\Plugin;

use Composer\Command\BaseCommand;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\PluginInterface;
use NuBox\Composer\Update\Wizard\Plugin\Command\AnalyseCommand;

final class UpdateWizardPlugin implements PluginInterface, CommandProvider
{
    public function activate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement activate() method.
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }

    /**
     * @return BaseCommand[]
     */
    public function getCommands(): array
    {
        return [
            AnalyseCommand::class,
        ];
    }
}
