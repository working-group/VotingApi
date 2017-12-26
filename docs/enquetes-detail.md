# 詳細取得

## method
GET

## path
`/enquetes/:id`

## request
|param|type|deicription|default|
|---|---|---|---|
|id|int|アンケートID|-|

## response
|param|type|description|
|---|---|---|
|id|int|アンケートID|
|title|string|タイトル|
|question|string|質問|
|selections|array|選択肢|

```
{
  id: 100,
  title:'好きな食べ物についてのアンケート',
  question:'好きな果物は？',
  selections:{
    {
      id:001,
      discription:'りんご',
    },
    {
      id:002,
      discription:'バナナ',
    },
    {
      id:001,
      discription:'オレンジ',
    },
    {
      id:001,
      discription:'',
    },
  },
}  
```
