<?php namespace Backup\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PackageCommand extends Command
{
    protected function configure()
    {
        $this->setName('package')
            ->setHidden(true)
            ->setDescription('Help to build the new phar file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output); // TODO: Change the autogenerated stub
    }
}
