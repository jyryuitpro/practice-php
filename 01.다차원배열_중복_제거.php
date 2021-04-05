<?php

$voca = array(
    array(
        'uid' => 88051,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'assume',
        'kor' => '확대하다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88060,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'extend',
        'kor' => '확대하다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88055,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'conclude',
        'kor' => '마치다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88053,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'original',
        'kor' => '원래의',
        'pumsa' => '형',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88054,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'original',
        'kor' => '독창적인',
        'pumsa' => '형',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88059,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'extend',
        'kor' => '연장하다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88058,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'deliver',
        'kor' => '(연설을) 하다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88052,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'assume',
        'kor' => '(책임을) 지다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88057,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'deliver',
        'kor' => '배달하다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
    array(
        'uid' => 88056,
        'day' => 1,
        'cate1' => '핵심 단어',
        'cate2' => '핵심 단어',
        'eng' => 'conclude',
        'kor' => '결론을 내리다',
        'pumsa' => '동',
        'gubun' => 'gtelp2021',
    ),
);

//$ids = array_column($voca, 'eng');
$ids = array_column($voca, 'kor');
var_dump($ids);

$ids = array_unique($ids);
print_r(array_keys($ids));

$array = array_filter($voca, function ($key, $value) use ($ids) {
    print_r($value);
    return in_array($value, array_keys($ids));
}, ARRAY_FILTER_USE_BOTH);

print_r($array);

$i = 0;
foreach ($array as $key => $value) {
    unset($array[$key]);
    $new_key = $i;
    $array[$new_key] = $value;
    $i++;
}
