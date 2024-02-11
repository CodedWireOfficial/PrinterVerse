<?php
$itemsFile = 'items.csv';

// Read the items data from the CSV file
$itemsData = [];
$fileHandle = fopen($itemsFile, "r");
if ($fileHandle !== FALSE) {
    // Skip the header row
    fgetcsv($fileHandle);

    // Read each row of data
    while (($data = fgetcsv($fileHandle)) !== FALSE) {
        $itemsData[$data[0]] = intval($data[1]);
    }

    fclose($fileHandle);
} else {
    die("Unable to open the items file for reading.");
}

// Display the quantities of each item
foreach ($itemsData as $itemName => $quantity) {
    echo "Item: $itemName, Quantity: $quantity";
}

// You can add more PHP code here, or integrate it as needed.
?>
