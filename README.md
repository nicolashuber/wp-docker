# wp_docker
A WordPress base theme build with Docker.

## Installation

### Docker
```
docker-compose pull && docker-compose build --pull
```

### MariaDB
```
docker-compose run up db
```

### Composer
```
docker-compose run --rm composer install
```

### Node
```
docker-compose run --rm node npm install
```

### Webpack
```
docker-compose run --rm node npm run build
```

### WordPress
```
docker-compose run --rm wordpress bin/install
```

## Development

### Server
```
docker-compose up server
```

### Webpack
```
docker-compose run --rm node npm run dev
```
