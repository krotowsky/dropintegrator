<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\ProductMapper;

class IntegratorProductSyncCommand extends Command
{
    protected static $defaultName = 'integrator:product:sync';
    protected static $defaultDescription = 'Sync product and stock';

    private $productMapper;

    public function __construct(ProductMapper $productMapper)
    {
        $this->productMapper = $productMapper;
        parent::__construct();
    }


    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1 != "prod") {
            $io->note(sprintf('Running: dry', $arg1));

            $this->productMapper->getDataAction();

        }elseif ($arg1 == "prod") {
            $io->note(sprintf('Running: %s', $arg1));
        }


        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
