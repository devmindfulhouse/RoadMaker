# RoadMaker

RoadMaker is a small PHP site served through `index.php`, Nginx and PHP-FPM.

## Configuration

The repository does not store production credentials.

You can provide database credentials in one of these ways:

1. Set `ROADMAKER_CREDENTIAL_FILE` to a PHP file that defines `$user` and `$password`.
2. Create `/etc/roadmaker/credentials.php` with `$user` and `$password`.
3. Copy `model/credential.local.example.php` to `model/credential.local.php`.
4. Set `ROADMAKER_DB_USER` and `ROADMAKER_DB_PASSWORD` environment variables.

Optional database settings:

- `ROADMAKER_DB_HOST` defaults to `localhost`
- `ROADMAKER_DB_NAME` defaults to `roadmaker`
- `ROADMAKER_DB_CHARSET` defaults to `utf8mb4`

## Minimal deployment steps

1. Clone the repository.
2. Configure credentials with one of the methods above.
3. Initialize MySQL with `database/roadmaker.bootstrap.sql`.
4. Point your web root to the project directory.
5. Serve PHP through PHP-FPM.

## Notes

- The repository includes `database/roadmaker.bootstrap.sql`, which reflects the current production state: an empty `roadmaker` database with `utf8mb4` collation.
- The current public site does not use application tables yet.
- The production deployment on this VPS uses `/etc/roadmaker/credentials.php`.