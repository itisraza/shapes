<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class TriangleController 
{
  public function getShapeDetails($a, $b, $c): JsonResponse
  {
    $s = ($a + $b + $c)/2;
    $area =  sqrt($s*(($s-$a)*($s-$b)*($s-$c)));
    $result = [
      'type' => "triangle",
      'a' => $a,
      'b' => $b,
      'c' => $c,
      'surface' => $area,
      'circumference' => ($a + $b + $c)
    ];
    return new JsonResponse($result);
  }
}
