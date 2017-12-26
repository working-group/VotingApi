# アンケート追加

## method
POST

## path
`/enquetes`

## request
|param|type|description|
|---|---|---|
|title|string|タイトル|
|question|string|質問|
|selections|array|選択肢|

```
{
  title:'好きな食べ物についてのアンケート',
  question:'好きな果物は？',
  selections:{
    {
      discription:'りんご',
    },
    {
      discription:'バナナ',
    },
    {
      discription:'オレンジ',
    },
    {
      discription:'',
    },
  },
}  
```

## response
|param|type|description|
|---|---|---|
|id|int|アンケートID|

```
{
  id: 100,
}  
```
