# TO DO APP API Documentation

- [Get All Todo](https://api.programmingwithrakib.com/docs/todo/get-all)
- [Add New Todo](https://api.programmingwithrakib.com/docs/todo/add-new)
- [Update Todo](https://api.programmingwithrakib.com/docs/todo/update)
- [Delete Todo](https://api.programmingwithrakib.com/docs/todo/delete)
- [Show Todo](https://api.programmingwithrakib.com/docs/todo/show)

---
# **Get All Todos**

## **Endpoint**
**BASE URL**: `https://api.programmingwithrakib.com`

**Path**: `/todo`

**Full URL:** `https://api.programmingwithrakib.com/todo`  

**Method:** `GET`

---

## **Request Parameters**
| Parameter | Type   | Description              | Required |
|-----------|--------|--------------------------|----------|
| `q`       | String | Query for filtering todos | Optional |

---

## **Example Request**

#### Using Axios:
```javascript
const options = {
  method: 'GET',
  url: 'https://api.programmingwithrakib.com/todo',
  params: { q: '' },
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
  "message": "Fetch Successfully",
  "figure": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "title": "quae unde dolores molestiae",
        "description": "Rerum possimus ipsa repellat dolores ea similique quae.",
        "completed": 0
      },
      {
        "id": 2,
        "title": "earum suscipit cum id",
        "description": "Deleniti vel explicabo modi illum amet.",
        "completed": 0
      }
    ],
    "links": [
      { "url": null, "label": "Previous", "active": false },
      { "url": "https://api.programmingwithrakib.com/todo?page=1", "label": "1", "active": true },
      { "url": "https://api.programmingwithrakib.com/todo?page=2", "label": "Next", "active": false }
    ],
    "next_page_url": "https://api.programmingwithrakib.com/todo?page=2",
    "per_page": 5,
    "total": 54
  }
}
```

---

## **Notes**
- To fetch specific todos, pass a value to the `q` parameter.
- All dates and times are returned in UTC.

---
