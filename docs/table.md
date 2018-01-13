# 物理テーブル名：enquete
# 論理テーブル名：アンケートテーブル

| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|enquete_id|integer|  |PRI|1|YES|  |
|2|title|string|  |  |テスト|YES|  |
|3|question|string|  |  | これは誰でしょう？ |YES|  |

# 物理テーブル名：answer
# 論理テーブル名：回答テーブル
| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|answer_id|integer|  |PRI|22|YES|  |
|2|enquete_id|integer|  |FOR|1|YES|  |
|3|item_id|integer|  | FOR |333|YES|  |
|4|comment|string|  |  | こんにちは |NO|  |
|5|commentedby|string|  |  | waragaya |NO|  |

# 物理テーブル名：item
# 論理テーブル名：項目テーブル
| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|item_id|integer|  |PRI|333|YES|  |
|2|enquete_id|integer|  | FOR |1|YES|  |
|3|item_name|string|  |  | りんご |YES|  |
