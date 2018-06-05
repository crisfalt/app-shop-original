---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_0f15af4a72ec033d66ef9a320727b267 -->
## /

> Example request:

```bash
curl -X GET "http://localhost//" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /`

`HEAD /`


<!-- END_0f15af4a72ec033d66ef9a320727b267 -->

<!-- START_45def4da6d09e649f3b2c95189bbb020 -->
## login

> Example request:

```bash
curl -X GET "http://localhost/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/login",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET login`

`HEAD login`


<!-- END_45def4da6d09e649f3b2c95189bbb020 -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/logout",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_d7e8ee2d51ff436e319caca5ab309cd9 -->
## register

> Example request:

```bash
curl -X GET "http://localhost/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/register",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET register`

`HEAD register`


<!-- END_d7e8ee2d51ff436e319caca5ab309cd9 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/register",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_f9bb43b2d406a133a7646f806a34310b -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET "http://localhost/password/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET password/reset`

`HEAD password/reset`


<!-- END_f9bb43b2d406a133a7646f806a34310b -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/email",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_5a0014b83f352dff4e16558b63bfd23e -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET "http://localhost/password/reset/{token}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset/{token}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET password/reset/{token}`

`HEAD password/reset/{token}`


<!-- END_5a0014b83f352dff4e16558b63bfd23e -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/password/reset",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_0494bdd1fdce3e0ad1b6ec4c797f0782 -->
## search

> Example request:

```bash
curl -X GET "http://localhost/search" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/search",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET search`

`HEAD search`


<!-- END_0494bdd1fdce3e0ad1b6ec4c797f0782 -->

<!-- START_dc7d4f11159faa5b8257dabe8060ac1b -->
## products/json

> Example request:

```bash
curl -X GET "http://localhost/products/json" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/products/json",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    "Deserunt doloribus corrupti aut",
    "Itaque doloribus ut ratione",
    "Molestiae saepe veniam",
    "Velit autem accusamus",
    "Ut veritatis consequuntur deserunt",
    "Tempora qui quia aperiam",
    "Iure ad et eligendi",
    "Culpa aut quaerat odio",
    "Et et fugiat aut",
    "Non eos eos",
    "Id distinctio assumenda",
    "Facilis eos quod dolorem",
    "Vel ratione aut voluptates",
    "Id debitis quam",
    "Beatae corrupti voluptate quo",
    "Voluptas maiores qui ducimus",
    "Rem consequatur",
    "Explicabo occaecati ut",
    "Quidem quasi veniam",
    "Ut veniam consequatur hic",
    "HONDA REWARD"
]
```

### HTTP Request
`GET products/json`

`HEAD products/json`


<!-- END_dc7d4f11159faa5b8257dabe8060ac1b -->

<!-- START_4d12119dce26b7df4c0c737c5de8f208 -->
## home

> Example request:

```bash
curl -X GET "http://localhost/home" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/home",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`

`HEAD home`


<!-- END_4d12119dce26b7df4c0c737c5de8f208 -->

<!-- START_b4136e7e76120988f83eb72c06223814 -->
## products/{id}

> Example request:

```bash
curl -X GET "http://localhost/products/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/products/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET products/{id}`

`HEAD products/{id}`


<!-- END_b4136e7e76120988f83eb72c06223814 -->

<!-- START_f387be7fc23bca291442057cd2b00065 -->
## categories/{category}

> Example request:

```bash
curl -X GET "http://localhost/categories/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/categories/{category}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET categories/{category}`

`HEAD categories/{category}`


<!-- END_f387be7fc23bca291442057cd2b00065 -->

<!-- START_ec84d824c4cb65ef97f310cf630ce77f -->
## cart

> Example request:

```bash
curl -X POST "http://localhost/cart" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/cart",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST cart`


<!-- END_ec84d824c4cb65ef97f310cf630ce77f -->

<!-- START_d6af71916c3ef5cede5a4b0d10d56e9a -->
## cart

> Example request:

```bash
curl -X DELETE "http://localhost/cart" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/cart",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE cart`


<!-- END_d6af71916c3ef5cede5a4b0d10d56e9a -->

<!-- START_d35a908f8f0cdbd0d499149cebfb4009 -->
## order

> Example request:

```bash
curl -X POST "http://localhost/order" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/order",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST order`


<!-- END_d35a908f8f0cdbd0d499149cebfb4009 -->

<!-- START_48ef1d4d6ebe7fce40b41b8ed155234e -->
## admin/products

> Example request:

```bash
curl -X GET "http://localhost/admin/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products`

`HEAD admin/products`


<!-- END_48ef1d4d6ebe7fce40b41b8ed155234e -->

<!-- START_e0c1b7231758d999761a3775ac26a402 -->
## admin/products/create

> Example request:

```bash
curl -X GET "http://localhost/admin/products/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/create`

`HEAD admin/products/create`


<!-- END_e0c1b7231758d999761a3775ac26a402 -->

<!-- START_075ee910ac89ee753cb942257accd01a -->
## admin/products

> Example request:

```bash
curl -X POST "http://localhost/admin/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST admin/products`


<!-- END_075ee910ac89ee753cb942257accd01a -->

<!-- START_8eacebb9f7aa7004f6f78858a0d96aaa -->
## admin/products/{id}/edit

> Example request:

```bash
curl -X GET "http://localhost/admin/products/{id}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/{id}/edit`

`HEAD admin/products/{id}/edit`


<!-- END_8eacebb9f7aa7004f6f78858a0d96aaa -->

<!-- START_166f91e5e229815b0b8613bfd16c1511 -->
## admin/products/{id}/edit

> Example request:

```bash
curl -X POST "http://localhost/admin/products/{id}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/edit",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST admin/products/{id}/edit`


<!-- END_166f91e5e229815b0b8613bfd16c1511 -->

<!-- START_a0145d8943adeca65a5b5035d6be1190 -->
## admin/products/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/admin/products/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE admin/products/{id}`


<!-- END_a0145d8943adeca65a5b5035d6be1190 -->

<!-- START_8572c688489185b6afc93c0dbc775e9e -->
## admin/products/{id}/images

> Example request:

```bash
curl -X GET "http://localhost/admin/products/{id}/images" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/images",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/products/{id}/images`

`HEAD admin/products/{id}/images`


<!-- END_8572c688489185b6afc93c0dbc775e9e -->

<!-- START_de029c6b52669ae128423f286c9f54ab -->
## admin/products/{id}/images

> Example request:

```bash
curl -X POST "http://localhost/admin/products/{id}/images" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/images",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST admin/products/{id}/images`


<!-- END_de029c6b52669ae128423f286c9f54ab -->

<!-- START_8cc738e7cc321543d9f6fa43f9358e38 -->
## admin/products/{id}/images

> Example request:

```bash
curl -X DELETE "http://localhost/admin/products/{id}/images" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/images",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE admin/products/{id}/images`


<!-- END_8cc738e7cc321543d9f6fa43f9358e38 -->

<!-- START_32f01545a5819f196399d6fcc1814eb2 -->
## admin/products/{id}/images/select/{image}

> Example request:

```bash
curl -X GET "http://localhost/admin/products/{id}/images/select/{image}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/products/{id}/images/select/{image}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException",
    "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteCollection.php",
    "line": 255,
    "trace": [
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteCollection.php",
            "line": 242,
            "function": "methodNotAllowed",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteCollection.php",
            "line": 176,
            "function": "getRouteForMethods",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "match",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 601,
            "function": "findRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\symfony\\console\\Application.php",
            "line": 938,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\symfony\\console\\Application.php",
            "line": 240,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\symfony\\console\\Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\app-shop-master\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET admin/products/{id}/images/select/{image}`

`HEAD admin/products/{id}/images/select/{image}`


<!-- END_32f01545a5819f196399d6fcc1814eb2 -->

<!-- START_af224c03d2eae964d75f24044df2213b -->
## admin/categories

> Example request:

```bash
curl -X GET "http://localhost/admin/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories`

`HEAD admin/categories`


<!-- END_af224c03d2eae964d75f24044df2213b -->

<!-- START_69efbd5ef9dc07ae76be68faccc0fc4f -->
## admin/categories/create

> Example request:

```bash
curl -X GET "http://localhost/admin/categories/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories/create`

`HEAD admin/categories/create`


<!-- END_69efbd5ef9dc07ae76be68faccc0fc4f -->

<!-- START_1c760aaf6fa8dfeb072fd2bcda7b6502 -->
## admin/categories

> Example request:

```bash
curl -X POST "http://localhost/admin/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST admin/categories`


<!-- END_1c760aaf6fa8dfeb072fd2bcda7b6502 -->

<!-- START_999dc3541543cf20987fe03159c4aa2e -->
## admin/categories/{category}/edit

> Example request:

```bash
curl -X GET "http://localhost/admin/categories/{category}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories/{category}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/categories/{category}/edit`

`HEAD admin/categories/{category}/edit`


<!-- END_999dc3541543cf20987fe03159c4aa2e -->

<!-- START_97ca18a303c3410dd6b6cf9580e8811d -->
## admin/categories/{category}/edit

> Example request:

```bash
curl -X POST "http://localhost/admin/categories/{category}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories/{category}/edit",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST admin/categories/{category}/edit`


<!-- END_97ca18a303c3410dd6b6cf9580e8811d -->

<!-- START_94773401487e54a4eef5ba3fffddfdb7 -->
## admin/categories/{category}

> Example request:

```bash
curl -X DELETE "http://localhost/admin/categories/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/admin/categories/{category}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE admin/categories/{category}`


<!-- END_94773401487e54a4eef5ba3fffddfdb7 -->

