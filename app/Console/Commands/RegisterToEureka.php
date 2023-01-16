<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Eureka\EurekaClient;


class RegisterToEureka extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eureka:registerToEureka';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command ro register to eureka server';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $client = new EurekaClient([
            'eurekaDefaultUrl' => 'http://eureka:8761/',
            'hostName' => 'mailing.service',
            'appName' => 'mailingservice',
            'ip' => 'mailingService',
            'port' => ['8001', true],
            'homePageUrl' => 'http://mailingService:8001',
            'statusPageUrl' => 'http://mailingService:8001/info',
            'healthCheckUrl' => 'http://mailingService:8001/health'
        ]);
        
        $error = true;
        while($error)
        {
            try {
                echo "Trying to connect";
                // $client->register();
                // $client->heartbeat();
                $client->start();
                $error = false;
                echo "Connected";
            } catch (\Throwable $th) {
                $error = true;
                echo "Error happened, Retrying";
                sleep(10);
            }
        }
        
        return Command::SUCCESS;
    }
}
