```php
function processData(array $data): array {
  return array_map(function ($value) {
    if (is_array($value)) {
      return processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      return substr($value, 0, 10) . '...'; // Truncate long strings
    }
    return $value; // Return unchanged if not an array or long string
  }, $data);
}

$data = [
  'name' => 'John Doe',
  'address' => [
    'street' => '123 Main Street Very Long Street Name',
    'city' => 'Anytown',
  ],
  'description' => 'This is a very long description that exceeds the 10 character limit.',
];

$processedData = processData($data);
print_r($processedData);
```