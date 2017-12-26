# 回答登録API
## method
POST

## path
`/answer/:enquete_id`

## request
|param|type|description|
|---|---|---|
|item_id|int|選択肢ID|
|comment|string|コメント|
|commentedby|string|回答者名|

## response
|param|type|description|
|---|---|---|
|id|int|回答ID|

```
{
  id: 999,
}  
```
