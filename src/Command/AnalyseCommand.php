<?php

declare(strict_types=1);

namespace NuBox\Composer\Update\Wizard\Plugin\Command;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class AnalyseCommand extends BaseCommand
{
    protected static $defaultName = 'wizard:analyse';

    public function configure(): void
    {
        $this->setName(self::$defaultName);
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Executing');

        return Command::SUCCESS;
    }
}
