# docker-traefik
Реверс прокси и балансер для внутренних сервисов. Для примера есть 2 php сервиса с nginx.

Запуск:
```
docker compose up -d
cd services/one && docker compose up -d
cd services/two && docker compose up -d --scale php=3 --scale nginx=2
```

Настройки описаны в docker-compose
