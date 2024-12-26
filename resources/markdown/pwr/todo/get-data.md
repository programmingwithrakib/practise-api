# TO DO APP API Documentation
 
- [Get All Todo](https://practice-api.sakibul-islam.xyz/docs/todo/get-all)
- [Add New Todo](https://practice-api.sakibul-islam.xyz/docs/todo/add-new)
- [Update Todo](https://practice-api.sakibul-islam.xyz/docs/todo/update)
- [Delete Todo](https://practice-api.sakibul-islam.xyz/docs/todo/delete)
- [Show Todo](https://practice-api.sakibul-islam.xyz/docs/todo/show)

---
# **Get All Todos**

## **Endpoint**
**URL:** `http://practice-api.sakibul-islam.xyz/todo`  
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
  url: 'http://practice-api.sakibul-islam.xyz/todo',
  params: { q: '' },
  headers: { 'User-Agent': 'insomnia/10.3.0' }
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
      { "url": "http://practice-api.sakibul-islam.xyz/todo?page=1", "label": "1", "active": true },
      { "url": "http://practice-api.sakibul-islam.xyz/todo?page=2", "label": "Next", "active": false }
    ],
    "next_page_url": "http://practice-api.sakibul-islam.xyz/todo?page=2",
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
