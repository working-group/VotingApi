# 回答取得API
## method
GET

## path
`/answers/:enquete_id`

## request
|param|type|description|
|---|---|---|
|enquete_id|int|アンケートID|

## response
|param|type|description|
|---|---|---|
|id|int|アンケートID|

```
{
  id: 100, //アンケートID
  cont: 100,
  answers: {
    {
      id:999, // 回答ID
      item_id: 01,
      comment:'rinngoしか！',
      commentedby: 'rih',
    },
    {
      id:9999,
      item_id: 001,
      comment:'りんごしか！',
      commentedby: '笑ガヤ',
    },
    {
      id:999, // 回答ID
      item_id: 002,
      comment:'バナナしか！',
      commentedby: 'rih',
    },
    {
      id:9999,
      item_id: 002,
      comment:'bananaしか！',
      commentedby: '笑ガヤ',
    },
  }
}  
```
