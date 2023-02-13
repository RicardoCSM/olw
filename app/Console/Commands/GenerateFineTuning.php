<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAI\Laravel\Facades\OpenAI;

class GenerateFineTuning extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'openai::create-finetuning';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create OpenAi fine tuning';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line("Uploading training file...");

        $file = OpenAI::files()->upload([
            'purpose' => 'fine-tune',
            'file' => fopen(storage_path('olw-dataset.jsonl'), 'r')
        ]);

        $this->comment("File {$file->filename} with Id {$file->id}");
    
        $this->line("Creating fine tuning...");

        $fineTuning = OpenAI::fineTunes()->create([
            'training_file' => $file->id,
            'suffix' => 'olw-2',
            'model' => 'davinci'
        ]);

        $this->comment("Fine tuning ID: {$fineTuning->id}");

        $this->info("Fine tuning create successfully");
    }
}
