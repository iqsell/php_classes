<?php
require_once 'TomatoBush.php';
require_once 'Tomato.php';

class Gardener
{
    private string $name;
    private ?TomatoBush $plant;

    public function __construct(string $name, ?TomatoBush $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }

    public function work(): void
    {
        if ($this->plant !== null) {
            $this->plant->growAll();
        } else {
            echo 'На участке садовода ' . $this->name . ' нет растений для обработки' . PHP_EOL;
        }
    }

    public function harvest(): void
    {
        if ($this->plant !== null && $this->plant->allAreRipe()) {
            echo 'Садовод ' . $this->name . ' собирает созревшие плоды' . PHP_EOL;
        } else {
            echo 'Садовод ' . $this->name . ' говорит, что еще не все плоды созрели' . PHP_EOL;
        }
    }

    public function KnowledgeBase(): void
    {
        echo 'Мы не плотники, мы - садоводы!'. PHP_EOL;
    }
}


$bush = new TomatoBush(2);
$gardener = new Gardener("Джон", $bush);

// Действия садовода
$gardener->KnowledgeBase();
$gardener->work();
$gardener->harvest();
$gardener->work();
$gardener->work(); // Несколько действий для наглядности
$gardener->harvest();
