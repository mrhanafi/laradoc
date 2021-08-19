- Project setup

- Running meilisearch on docker
 docker run -itd --rm -p 7700:7700 -v /data.ms:/data.ms getmeili/meilisearch

- attach uploaded files to meilisearch for testing
 php artisan scout:index documents
 php artisan scout:import "App\Models\Document