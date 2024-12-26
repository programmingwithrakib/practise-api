# TO DO APP API Documentation

- [Get All Todo](https://api.programmingwithrakib.com/docs/todo/get-all)
- [Add New Todo](https://api.programmingwithrakib.com/docs/todo/add-new)
- [Update Todo](https://api.programmingwithrakib.com/docs/todo/update)
- [Delete Todo](https://api.programmingwithrakib.com/docs/todo/delete)
- [Show Todo](https://api.programmingwithrakib.com/docs/todo/show)

---

# **Update a Todo**

## **Endpoint**
**BASE URL**: `https://api.programmingwithrakib.com`

**Path**: `/todo/update/<id>`

**URL:** `https://api.programmingwithrakib.com/todo/update/<id>`  

**Method:** `POST`

---

## **Path Parameter**
| Parameter | Type   | Description            | Required |
|-----------|--------|------------------------|----------|
| `id`      | Integer | ID of the todo to update | Yes      |

---

## **Body Parameters**
| Parameter     | Type     | Description                 | Required |
|---------------|----------|-----------------------------|----------|
| `title`       | String   | Title of the todo.          | Yes      |
| `description` | String   | Description of the todo.    | Yes      |
| `completed`   | Boolean  | Completion status (optional). | No       |

---

## **Example Request**

#### Using Axios:
```javascript
const form = new FormData();
form.append("title", "IAmTitle 2");
form.append("description", "IAmDescription");
form.append("completed", "1");

const options = {
  method: 'POST',
  url: 'https://api.programmingwithrakib.com/todo/update/50',
  data: form
};

axios.request(options)
  .then(response => console.log(response.data))
  .catch(error => console.error(error));
```

---

## **Response**

#### **Success Response**
**Status Code:** `200 OK`  
**Content:**
```json
{
  "status": "success",
  "message": "Updated Successfully",
  "figure": {
    "id": 50,
    "title": "IAmTitle 2",
    "description": "IAmDescription",
    "completed": "1"
  }
}
```

---

## **Notes**
- Ensure the `id` in the URL corresponds to the todo you want to update.
- Both `title` and `description` are required fields.
- The `completed` parameter is optional and defaults to `false` if not provided.
- Ensure the request body is sent as `FormData`.

---
