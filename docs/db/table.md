# ¿¿¿¿¿¿¿¿enquete
# ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿
| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|enquete_id|integer|  |PRI|1|YES|  |
|2|title|string|  |  |¿¿¿|YES|  |
|3|question|string|  |  | ¿¿¿¿¿¿¿¿¿ |YES|  |

# ¿¿¿¿¿¿¿¿answer
# ¿¿¿¿¿¿¿¿¿¿¿¿¿¿
| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|answer_id|integer|  |PRI|22|YES|  |
|2|enquete_id|integer|  |FOR|1|YES|  |
|3|item_id|integer|  | FOR |333|YES|  |
|4|comment|string|  |  | ¿¿¿¿¿ |NO|  |
|5|commentedby|string|  |  | waragaya |NO|  |

# ¿¿¿¿¿¿¿¿item
# ¿¿¿¿¿¿¿¿¿¿¿¿¿¿
| |name|type|size|key|default value|not null|remarks|
|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
|1|item_id|integer|  |PRI|333|YES|  |
|2|enquete_id|integer|  | FOR |1|YES|  |
|3|item_name|string|  |  | ¿¿¿ |YES|  |aaaaaaaaa
