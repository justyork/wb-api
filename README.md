## Api visitors


### List of visits
GET /api/visits

Responce
```json
{"ru":3,"it":2,"en":34,"is":5}
```
Codes:
* 200 - Success


### Add visit
POST /api/visit

Payload
```json
{
    "code": "en" // country code
}
```

Codes:

* 204 - Success
* 422 - Incorrect code
```json
{
    "errors": {
        "code": [
            "The code must not be greater than 2 characters."
        ]
    }
}
```

### Structure

- `/routes/api.php` - list of routes
- `/App/Http/Controllers/VisitController.php` - Controller of visits
- `/App/Http/Requests/VisitorRequest.php` - Request validator
- `/App/Services/Storage` - Storage service
- `/App/Services/Visits` - Visit service
- `/App/Providers/AppServiceProvider.php` - DI provider

### Improvements
- Rate limiter by ip (less damage from DDOS)
- Operation locks
- Redis cluster
