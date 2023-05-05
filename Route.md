# Config Routes

### Config Controller Route

Create a controller with the crud command
```
bin/console make:crud Category
```

```
# config/routes/attributes.yaml
controllers:
    resource:
        path: ../../src/Controller/
        namespace: App\Controller
    type: attribute
```
