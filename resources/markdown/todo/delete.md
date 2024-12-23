# TO DO APP API Documentation

- [Get All Todo](https://practice-api.sakibul-islam.xyz/docs/todo/get-all)
- [Add New Todo](https://practice-api.sakibul-islam.xyz/docs/todo/add-new)
- [Update Todo](https://practice-api.sakibul-islam.xyz/docs/todo/update)
- [Delete Todo](https://practice-api.sakibul-islam.xyz/docs/todo/delete)
- [Show Todo](https://practice-api.sakibul-islam.xyz/docs/todo/show)

---

# **Delete a Todo**

## **Endpoint**
**URL:** `http://practice-api.sakibul-islam.xyz/todo/delete/<id>`  
**Method:** `POST`

---

## **Path Parameter**
| Parameter | Type   | Description            | Required |
|-----------|--------|------------------------|----------|
| `id`      | Integer | ID of the todo to delete | Yes      |

---

## **Example Request**

#### Using Axios:
```javascript
const options = {
  method: 'POST',
  url: 'http://practice-api.sakibul-islam.xyz/todo/delete/52',
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
  "message": "Deleted Successfully",
  "figure": {
    "id": 50,
    "title": "a molestias ratione molestias",
    "description": "Est quod sed nemo minus qui veniam.",
    "completed": 0
  }
}
```

---

## **Notes**
- Ensure the `id` in the URL corresponds to the todo you want to delete.
- The response includes the deleted todo's details for confirmation.

---
