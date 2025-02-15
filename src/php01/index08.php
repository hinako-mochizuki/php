<?php

// // Q1

// $people=[
//     [
//     "名前"=>"Taro",
//     "年齢"=>25,
//     "性別"=>"men",
// ],
// [
//     "名前"=>"Jiro",
//     "年齢"=>20,
//     "性別"=>"men",
// ]
// [
//     "名前"=>"hanako",
//     "年齢"=>16,
//     "性別"=>"women",
// ]

// ]

// foreach ($people as $person => $value) {
//     echo $peopre[0,"名前"]
// }

// 正解

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
