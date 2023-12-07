# Support PHP Symfony

## Install & start project
Run commands
```bash
composer install
yarn install
```

```bash
yarn dev-server
```

```bash
symfony serve
```

## Steps
1. Create entities based on this MPD  
![](docs/model-bdd.png)  
2. Create Fixtures (2 campus and 4 students by campus)
3. Display sections of campus with students registered on a `/trombinoscope` page
>Hint: make a controller for this route

## Bonus
- Create a page `/trombinoscope/show` to display information (name & picture) of one student