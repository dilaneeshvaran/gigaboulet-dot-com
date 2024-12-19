<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ImportDailyPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:daily-posts {file=posts.json}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importer des posts depuis un fichier JSON ou CSV pour les publier chaque jour';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $filePath = storage_path('app/' . $this->argument('file')); // Fichier passé en paramètre

        // Vérifier si le fichier existe
        if (!file_exists($filePath)) {
            $this->error('Le fichier spécifié n\'existe pas.');
            return;
        }

        // Si le fichier est JSON
        if (pathinfo($filePath, PATHINFO_EXTENSION) == 'json') {
            $data = json_decode(file_get_contents($filePath), true);
        }
        // Si le fichier est CSV
        elseif (pathinfo($filePath, PATHINFO_EXTENSION) == 'csv') {
            $data = $this->parseCSV($filePath);
        } else {
            $this->error('Le format de fichier est invalide. Seuls les fichiers JSON et CSV sont supportés.');
            return;
        }

        // Importer les données dans la table posts
        foreach ($data as $item) {
            Post::create([
                'user_id' => $item['user_id'],
                'category_id' => $item['category_id'] ?? null,
                'title' => $item['title'],
                'slug' => $item['slug'],
                'excerpt' => $item['excerpt'] ?? null,
                'content' => $item['content'] ?? null,
                'post_image' => $item['post_image'] ?? null,
                'published_at' => Carbon::parse($item['published_at']),
                'status' => 0, 
            ]);
        }

        $this->info('Les posts ont été importés avec succès.');
    }

    /**
     * Parse a CSV file into an array.
     *
     * @param string $filePath
     * @return array
     */
    protected function parseCSV($filePath)
    {
        $data = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            $header = fgetcsv($handle); // Lire l'en-tête
            while (($row = fgetcsv($handle)) !== false) {
                $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
