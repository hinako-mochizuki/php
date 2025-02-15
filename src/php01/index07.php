<?php

// // Q1 要確認

// function text($number1,$number2)
// {
//     $value=$number1+$number2;
//     return $value;
// }

// $total =text(2,3);
// echo $total;

// // Q2

// function exam($score1,$score2,$score3)
// {
//     $total=$score1+$score2+$score3;
//     if ($total>210) {
//         echo $total."点なので合格です";
//     }else {
//         echo $total."点なので不合格です";
//     }
// }
// echo (exam(80, 60, 90));

// Q3 要確認

// 三角形：底辺*高さ/2

// function area($side1,$side2)
// {
//     $value=$side1*$side2/2;
//     return $value;
// }

// $number=area(12,5);
// echo $value;


function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

