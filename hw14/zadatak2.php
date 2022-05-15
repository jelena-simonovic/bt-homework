<?php


function result($totalFuel, $fuelUseByTruck, $remainingFuelValue = null)
{
    if (!empty($remainingFuelValue)) {
        if (($totalFuel > 0) && ($fuelUseByTruck > 0) && !is_string($totalFuel) && !is_string($fuelUseByTruck)) {
            if ($fuelUseByTruck > $totalFuel) {
                return "Not enough fuel for even one truck.";
            } else {
                $remainingFuel = $totalFuel % $fuelUseByTruck;
                return "Remaining fuel: " . $remainingFuel . " liters.";
            }
        } else if (is_string($totalFuel) || is_string($fuelUseByTruck) || $totalFuel <= 0 || $fuelUseByTruck <= 0) {
            die('Total fuel and fuel use values must be numbers over 0.');
        }
    } else {
        if (($totalFuel > 0) && ($fuelUseByTruck > 0) && !is_string($totalFuel) && !is_string($fuelUseByTruck)) {
            if ($fuelUseByTruck > $totalFuel) {
                return "Not enough fuel for even one truck.";
            } else {
                $numberOFTrucks = floor($totalFuel / $fuelUseByTruck);
                return "Enough fuel for: $numberOFTrucks trucks.";
            }
        } else if (is_string($totalFuel) || is_string($fuelUseByTruck) || $totalFuel <= 0 || $fuelUseByTruck <= 0) {
            die('Total fuel and fuel use values must be numbers over 0.');
        }
    }
}

echo result(55, 14);
