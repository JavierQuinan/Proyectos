<?php
declare(strict_types=1);

require_once __DIR__ . '/Database.php';

final class ItemRepository
{
    public function __construct(private Database $database)
    {
    }

    public function all(int $limit = 50, int $offset = 0): array
    {
        $limit = max(1, min(200, $limit));
        $offset = max(0, $offset);

        $statement = $this->database->pdo()->prepare(
            'SELECT id, name, price, created_at
             FROM items
             ORDER BY id DESC
             LIMIT :limit OFFSET :offset'
        );
        $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        $statement->bindValue(':offset', $offset, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function find(int $id): ?array
    {
        $rows = $this->database->select(
            'SELECT id, name, price, created_at FROM items WHERE id = :id',
            [':id' => $id]
        );

        return $rows[0] ?? null;
    }

    public function create(string $name, float $price): array
    {
        $name = trim($name);
        $this->validate($name, $price);

        $this->database->execute(
            'INSERT INTO items (name, price) VALUES (:name, :price)',
            [':name' => $name, ':price' => $price]
        );

        $id = (int) $this->database->lastInsertId();

        return $this->find($id) ?? [
            'id' => $id,
            'name' => $name,
            'price' => $price,
        ];
    }

    public function update(int $id, string $name, float $price): ?array
    {
        if ($this->find($id) === null) {
            return null;
        }

        $name = trim($name);
        $this->validate($name, $price);

        $this->database->execute(
            'UPDATE items SET name = :name, price = :price WHERE id = :id',
            [':id' => $id, ':name' => $name, ':price' => $price]
        );

        return $this->find($id);
    }

    public function delete(int $id): bool
    {
        return $this->database->execute(
            'DELETE FROM items WHERE id = :id',
            [':id' => $id]
        ) > 0;
    }

    private function validate(string $name, float $price): void
    {
        if ($name === '') {
            throw new InvalidArgumentException('Name is required.');
        }

        if (mb_strlen($name) > 120) {
            throw new InvalidArgumentException('Name cannot exceed 120 characters.');
        }

        if ($price < 0 || $price > 999999.99) {
            throw new InvalidArgumentException('Price is outside the accepted range.');
        }
    }
}
