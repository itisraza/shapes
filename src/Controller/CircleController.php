<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class CircleController 
{
  public function getShapeDetails($r): JsonResponse
  {
    $area = pi() * pow($r, 2);
    $circumference = 2 * pi() * $r;
    $result = [
      'type' => "circle",
      'radius' => $r,
      'surface' => $area,
      'circumference' => $circumference
    ];
    return new JsonResponse($result);
  }
}
