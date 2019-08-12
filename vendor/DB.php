<?php

namespace vendor;

class DB
{
    private $db = 'lactures';
    private $host = 'localhost';
    private $user = 'root';
    private $charset = 'utf8';
    private $password = 'root';

    private $pdo;

    protected $tblName;

    public function __construct()
    {
        Logger::log('Начинаем соединение с бд');
        echo 'Начинаем соединение с бд';
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', $this->host, $this->db, $this->charset);
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new \PDO($dsn, $this->user, $this->password, $opt);
            Logger::log('Соединение установлено успешно');
        } catch (PDOException $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }

    /**
     * @return bool|\PDOStatement|void
     */
    public function selectAll()
    {
        if (!is_string($this->tblName)) {
            Logger::log('Имя таблицы не валидное!');
            return;
        }
        $stmt = $this->pdo->query('SELECT * FROM '. $this->tblName);
        Logger::log('Данные успешно получены');
        return $stmt->fetch();
    }

    public function __destruct()
    {
        echo 'Закрываем соединение с бд';
        $this->pdo = null;
    }
}