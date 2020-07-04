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

#User management


<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## api/users
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users?include=roles%2Cpermissions&filter[roles]=writer%2Csuper-admin&page=1&limit=20&sort=id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let params = {
    "include": "roles,permissions",
    "filter[roles]": "writer,super-admin",
    "page": "1",
    "limit": "20",
    "sort": "id",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "writer",
            "email": "cara46@example.net",
            "email_verified_at": "2020-07-02T16:29:40.000000Z",
            "roles": [
                "writer"
            ],
            "permissions": [
                "edit articles"
            ],
            "direct_permissions": [],
            "avatar": "http:\/\/www.gravatar.com\/avatar\/b08060e6bffd276eca7210794fde333d",
            "introduction": true,
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "super-admin",
            "email": "admin@gmail.com",
            "email_verified_at": "2020-07-02T16:29:41.000000Z",
            "roles": [
                "super-admin"
            ],
            "permissions": [
                "edit articles",
                "delete articles",
                "publish articles",
                "unpublish articles"
            ],
            "direct_permissions": [],
            "avatar": "http:\/\/www.gravatar.com\/avatar\/75d23af433e0cea4c0e45a56dba18b30",
            "introduction": true,
            "created_at": "2020-07-02T16:29:41.000000Z",
            "updated_at": "2020-07-02T16:29:41.000000Z",
            "deleted_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/users?include=roles%2Cpermissions&filter%5Broles%5D=writer%2Csuper-admin&limit=20&sort=id&page=1",
        "last": "http:\/\/localhost\/api\/users?include=roles%2Cpermissions&filter%5Broles%5D=writer%2Csuper-admin&limit=20&sort=id&page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/users",
        "per_page": "20",
        "to": 2,
        "total": 2
    }
}
```

### HTTP Request
`GET api/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `include` |  optional  | optional The id of the location.
    `filter[search]` |  optional  | optional The text you want to search.
    `filter[roles]` |  optional  | optional string The roles you want to search.
    `page` |  required  | The page int number.
    `limit` |  required  | The per page number.
    `sort` |  required  | The sort field.

<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## api/users
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`


<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## api/users/{user}
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## api/users/{user}
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`


<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## api/users/{user}
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

#general


<!-- START_4dfafe7f87ec132be3c8990dd1fa9078 -->
## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET sanctum/csrf-cookie`


<!-- END_4dfafe7f87ec132be3c8990dd1fa9078 -->

<!-- START_aa138eef10cda00d1769225c9756cd0d -->
## api/sanctum/token
> Example request:

```bash
curl -X POST \
    "http://localhost/api/sanctum/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/sanctum/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/sanctum/token`


<!-- END_aa138eef10cda00d1769225c9756cd0d -->

<!-- START_b19e2ecbb41b5fa6802edaf581aab5f6 -->
## api/me
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 3,
        "name": "super-admin",
        "email": "admin@gmail.com",
        "email_verified_at": "2020-07-02T16:29:41.000000Z",
        "roles": [
            "super-admin"
        ],
        "permissions": [
            "edit articles",
            "delete articles",
            "publish articles",
            "unpublish articles"
        ],
        "direct_permissions": [],
        "avatar": "http:\/\/www.gravatar.com\/avatar\/75d23af433e0cea4c0e45a56dba18b30",
        "introduction": true,
        "created_at": "2020-07-02T16:29:41.000000Z",
        "updated_at": "2020-07-02T16:29:41.000000Z",
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/me`


<!-- END_b19e2ecbb41b5fa6802edaf581aab5f6 -->

<!-- START_6470e6b987921f5c45bf7a2d8e674f57 -->
## api/roles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "writer",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        },
        {
            "id": 2,
            "name": "moderator",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        },
        {
            "id": 3,
            "name": "super-admin",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:41.000000Z",
            "updated_at": "2020-07-02T16:29:41.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/roles`


<!-- END_6470e6b987921f5c45bf7a2d8e674f57 -->

<!-- START_90c780acaefab9740431579512d07101 -->
## api/roles
> Example request:

```bash
curl -X POST \
    "http://localhost/api/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/roles`


<!-- END_90c780acaefab9740431579512d07101 -->

<!-- START_eb37fe1fa9305b4b78850dd87031670b -->
## api/roles/{role}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/roles/{role}`


<!-- END_eb37fe1fa9305b4b78850dd87031670b -->

<!-- START_cccebfff0074c9c5f499e215eee84e86 -->
## api/roles/{role}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/roles/{role}`

`PATCH api/roles/{role}`


<!-- END_cccebfff0074c9c5f499e215eee84e86 -->

<!-- START_9aab750214722ffceebef64f24a2e175 -->
## api/roles/{role}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/roles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/roles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/roles/{role}`


<!-- END_9aab750214722ffceebef64f24a2e175 -->

<!-- START_42db014707f615cd5cafb5ad1b6d0675 -->
## api/permissions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "edit articles",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        },
        {
            "id": 2,
            "name": "delete articles",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        },
        {
            "id": 3,
            "name": "publish articles",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        },
        {
            "id": 4,
            "name": "unpublish articles",
            "guard_name": "web",
            "created_at": "2020-07-02T16:29:40.000000Z",
            "updated_at": "2020-07-02T16:29:40.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/permissions`


<!-- END_42db014707f615cd5cafb5ad1b6d0675 -->

<!-- START_d513e82f79d47649a14d2e59fda93073 -->
## api/permissions
> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/permissions`


<!-- END_d513e82f79d47649a14d2e59fda93073 -->

<!-- START_29ec1a9c6f20445dcd75bf6a4cc63e2a -->
## api/permissions/{permission}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/permissions/{permission}`


<!-- END_29ec1a9c6f20445dcd75bf6a4cc63e2a -->

<!-- START_cbdd1fce06181b5d5d8d0f3ae85ed0ee -->
## api/permissions/{permission}
> Example request:

```bash
curl -X PUT \
    "http://localhost/api/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/permissions/{permission}`

`PATCH api/permissions/{permission}`


<!-- END_cbdd1fce06181b5d5d8d0f3ae85ed0ee -->

<!-- START_58309983000c47ce901812498144165a -->
## api/permissions/{permission}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/permissions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/permissions/{permission}`


<!-- END_58309983000c47ce901812498144165a -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer 1|FD895uiVrZ1Sqi5hnXXTIcf3N7lcmvMqUfqrl6SSqL7vOj6Hv0HWOE1rdCae1R6l6yQBKKfIjPsUbil6",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


