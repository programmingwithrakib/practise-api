# Test API Documentation Request

## **Endpoint**
**BASE URL**: `https://api.programmingwithrakib.com`

**Path**: `/test-api`

**Full URL:** `https://api.programmingwithrakib.com/test-api`

**Method:** `GET`, `POST`, `DELETE`, `PUT`, `PATCH`, `OPTIONS`, `HEAD`

---

## **Send Request With**
| Name            | Status | Description                                                                               | Available Method |
|-----------------|--------|-------------------------------------------------------------------------------------------|------------------|
| query parameter | `yes`  | রিকুয়েস্ট এর সময় কুয়েরি প্যারামিটার এ ডাটা দিয়ে টেস্ট করতে পারবেন এবং ফলাফল রিটার্ন পাবেন | GET              |
| headers         | `yes`  | রিকুয়েস্ট এর সময় header এ ডাটা দিয়ে টেস্ট করতে পারবেন এবং ফলাফল রিটার্ন পাবেন             | All Methods      |
| Form Data       | `yes`  | রিকুয়েস্ট এর সময় form data  ডাটা দিয়ে টেস্ট করতে পারবেন এবং ফলাফল রিটার্ন পাবেন           | POST             |
| JSON Data       | `yes`  | রিকুয়েস্ট এর সময় JSON  ডাটা দিয়ে টেস্ট করতে পারবেন এবং ফলাফল রিটার্ন পাবেন                | POST,PUT         |
| Plain Text      | `yes`  | রিকুয়েস্ট এর সময় JSON  ডাটা দিয়ে টেস্ট করতে পারবেন এবং ফলাফল রিটার্ন পাবেন                | POST,PUT         |

## Example Response 

```js
{
	"message": "স্বাগতম! আপনি সঠিক ভাবে আমার কাছে রিকুয়েস্ট পাঠিয়েছেন। আপনি যে তথ্য গুলো পাঠিয়েছেন সেগুলো info প্রপার্টি তে আছে। ",
	"info": {
		"method": "PUT",
		"path": "test-api",
		"headers": {},
        "query": {},
		"Content-Type": "...",
		"bodyData": []
	}
}
```
