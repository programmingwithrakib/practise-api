# TO DO APP API Documentation

- [Get All Todo](https://practice-api.sakibul-islam.xyz/docs/todo/get-all)
- [Add New Todo](https://practice-api.sakibul-islam.xyz/docs/todo/add-new)
- [Update Todo](https://practice-api.sakibul-islam.xyz/docs/todo/update)
- [Delete Todo](https://practice-api.sakibul-islam.xyz/docs/todo/delete)
- [Show Todo](https://practice-api.sakibul-islam.xyz/docs/todo/show)

---

# **Update a Todo**

## **Endpoint**
**URL:** `http://practice-api.sakibul-islam.xyz/todo/update/<id>`  
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
  url: 'http://practice-api.sakibul-islam.xyz/todo/update/50',
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
