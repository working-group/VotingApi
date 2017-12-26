# 回答取得API(選択肢ごと)（余力あれば）
## method
GET

## path
`/enquetes/:id/result/:item_id`

## request
|param|type|description|
|---|---|---|
|id|int|アンケートID|
|item_id|int|選択肢ID|

## response
|param|type|description|
|---|---|---|
|id|int|アンケートID|

```
{
  id: 100, //アンケートID
  item_id:001
  cont: 20,
  answers: {
    {
      id:999, // 回答ID
      item_id: 001,
      comment:'rinngoしか！',
      commentedby: 'rih',
    },
    {
      id:9999,
      item_name: 001,
      comment:'りんごしか！',
      commentedby: '笑ガヤ',
    },
  }
}  
```
