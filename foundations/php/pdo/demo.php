<?php
declare(strict_types=1);

require_once __DIR__ . '/ItemRepository.php';

$databaseFile = sys_get_temp_dir() . '/engineering-foundations-pdo.sqlite';
$database = new Database('sqlite:' . $databaseFile);
$schema = file_get_contents(__DIR__ . '/schema.sql');

if ($schema === false) {
    throw new RuntimeException('Unable to read schema.sql');
}

$database->pdo()->exec($schema);
$database->execute('DELETE FROM items');

$repository = new ItemRepository($database);

$created = $repository->create('Keyboard', 49.90);
$updated = $repository->update((int) $created['id'], 'Mechanical Keyboard', 79.90);
$all = $repository->all();
$deleted = $repository->delete((int) $created['id']);

if ($updated === null || count($all) !== 1 || $deleted !== true) {
    throw new RuntimeException('PDO foundation demo failed.');
}

@unlink($databaseFile);

echo "PDO foundation demo: OK\n";
