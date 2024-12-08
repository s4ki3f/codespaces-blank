
### **API_DOCUMENTATION.md**

This file will contain detailed documentation of all API endpoints, including authentication, user management, role management, and permission management.

**File: `API_DOCUMENTATION.md`**

```markdown
```
# User Management API Documentation

## Overview

This API provides endpoints for managing users, roles, and permissions. It includes secure authentication using Laravel Passport and follows RESTful principles.

## Table of Contents

- Authentication
- [User Management](#user-management)
- [Role Management](#role-management)
- [Permission Management](#permission-management)
- [Error Handling](#error-handling)

## Authentication

### Obtain Access Token

**Endpoint:**

POST /oauth/token

**Request:**

```json
{
  "grant_type": "password",
  "client_id": "YOUR_CLIENT_ID",
  "client_secret": "YOUR_CLIENT_SECRET",
  "username": "user@example.com",
  "password": "user_password",
  "scope": "*"
}
```
Response:
```
{
  "token_type": "Bearer",
  "expires_in": 31536000,
  "access_token": "eyJ0eXAiOiJKV1QiLCJhb...",
  "refresh_token": "def50200a1b5d..."
}
```
#User Management
Get All Users
Endpoint:

users
```
GET /api/users
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
[
  {
    "id": 1,
    "name": "Jane Doe",
    "email": "jane@example.com",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  ...
]
```
Create a New User
Endpoint:
```
POST /api/users
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:
```
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password"
}
```
Response:
```
{
  "id": 2,
  "name": "John Doe",
  "email": "john@example.com",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Get a Specific User
Endpoint:
```
GET /api/users/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "id": 1,
  "name": "Jane Doe",
  "email": "jane@example.com",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Update a User
Endpoint:
```
PUT /api/users/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:

```
{
  "name": "Jane Smith",
  "email": "janesmith@example.com"
}
```
Delete a User
Endpoint:

```
DELETE /api/users/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "message": "User deleted successfully."
}
```
#Role Management
Get All Roles
Endpoint:
```
GET /api/roles
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
[
  {
    "id": 1,
    "name": "Admin",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  ...
]
```
Create a New Role
Endpoint:
```
POST /api/roles
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:
```
{
  "name": "Editor"
}
```
Response:
```
{
  "id": 2,
  "name": "Editor",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Get a Specific Role
Endpoint:
```
GET /api/roles/{id}
```
Headers:

```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "id": 1,
  "name": "Admin",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Update a Role
Endpoint:
```
PUT /api/roles/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:
```
{
  "name": "Super Admin"
}
```
Response:
```
{
  "id": 1,
  "name": "Super Admin",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Delete a Role
Endpoint:
```
DELETE /api/roles/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "message": "Role deleted successfully."
}
```
#Permission Management

Get All Permissions
Endpoint:
```
GET /api/permissions
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
[
  {
    "id": 1,
    "name": "view-users",
    "created_at": "2023-01-01T00:00:00.000000Z",
    "updated_at": "2023-01-01T00:00:00.000000Z"
  },
  ...
]
```
Create a New Permission
Endpoint:

```
POST /api/permissions
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:
```
{
  "name": "edit-users"
}
```
Response:
```
{
  "id": 2,
  "name": "edit-users",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Get a Specific Permission
Endpoint:
```
GET /api/permissions/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "id": 1,
  "name": "view-users",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Update a Permission
Endpoint:
```
PUT /api/permissions/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
Content-Type: application/json
```
Request:
```
{
  "name": "manage-users"
}
```
Response;
```
{
  "id": 1,
  "name": "manage-users",
  "created_at": "2023-01-01T00:00:00.000000Z",
  "updated_at": "2023-01-01T00:00:00.000000Z"
}
```
Delete a Permission
Endpoint:
```
DELETE /api/permissions/{id}
```
Headers:
```
Authorization: Bearer ACCESS_TOKEN
```
Response:
```
{
  "message": "Permission deleted successfully."
}
```
Unauthorized Access
Response:

```
{
  "message": "Unauthenticated."
}
```
Valiidation Errors
Response:

```
{
  "message": "The given data was invalid.",
  "errors": {
    "email": [
      "The email field is required."
    ]
  }
}
```
