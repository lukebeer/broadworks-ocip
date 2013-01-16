<?php
class NumberingHelpers {

    // Return array of numbers in Service Provider, expanded, NOT ranges.
    // Accepts response object that returns a dnSummaryTable property.
    public static function getNumbersAsArray($response) {
        $numbers = null;
        if (property_exists($response, 'dnSummaryTable')) {
            foreach($response->dnSummaryTable['row'] as $row) {
                $row = isset($row['col']) ? $row['col'][0] : $row[0];
                if (preg_match('/ - /', $row)) {
                    $item = str_replace(['-', '+'], null, $row);
                    preg_match('/(\d+)\s+(\d+)/', $item, $range);
                    while ($range[1] <= $range[2]) {
                        $numbers[] = $range[1];
                        $range[1]++;
                    }
                }
            }
            return $numbers;
        }
        return false;
    }
}