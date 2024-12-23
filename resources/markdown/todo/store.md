# TO DO APP API Documentation

- [Get All Todo](https://practice-api.sakibul-islam.xyz/docs/todo/get-all)
- [Add New Todo](https://practice-api.sakibul-islam.xyz/docs/todo/add-new)
- [Update Todo](https://practice-api.sakibul-islam.xyz/docs/todo/update)
- [Delete Todo](https://practice-api.sakibul-islam.xyz/docs/todo/delete)
- [Show Todo](https://practice-api.sakibul-islam.xyz/docs/todo/show)

---
# **Create a Todo**

## **Endpoint**
**URL:** `http://practice-api.sakibul-islam.xyz/todo/store`  
**Method:** `POST`

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
form.append("title", "IAmTitle");
form.append("description", "IAmDescription");
form.append("completed", "1");

const options = {
  method: 'POST',
  url: 'http://practice-api.sakibul-islam.xyz/todo/store',
  data: form
};

axios.request(options)
  .then(response => console.log(response.data))
  .catch(error => console.error(error));
```

---

## **Response**

#### **Success Response**
**Status Code:** `200`  
**Content:**
```json
{
  "status": "success",
  "message": "Store Successfully",
  "figure": {
    "id": 54,
    "title": "IAmTitle",
    "description": "IAmDescription",
    "completed": "1"
  }
}
```

---

## **Notes**
- Both `title` and `description` are mandatory.
- The `completed` parameter is optional and defaults to `false` if not provided.
- Ensure the request body is sent as `FormData`.

---
