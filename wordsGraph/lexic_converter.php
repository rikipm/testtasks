<?php

function canBeTransfered($first, $second) //Определяет возможно ли преобразовать слово first в слово second
{
    if (strlen($first) == strlen($second)) {
        $len = strlen($first);
        $differentCharactersCount = 0;
        $charactersCanBeChanged = 1; //Константа которая определяет сколько букв за раз меняется в слове. По условию задания 1
        for ($i = 0; $i<$len; $i++) {
            if (mb_substr($first, $i, 1) != mb_substr($second, $i, 1)) {
                $differentCharactersCount++;
            }
        }
        if ($differentCharactersCount == $charactersCanBeChanged) {
            return(true);
        } else {
            return(false);
        }
    } else {
        return(false);
    }
}

$availableWords = array_map("trim", explode(',', file_get_contents('words.txt'))); //Слова которые программа может использовать

class node
{
    public $path = array();
    public $childs = array();
    
    public function __construct($pasteWord, $parent)
    {
        $this->path = $parent->path;
        array_push($this->path, $pasteWord);
        $this->generateTree();
    }
    
    public function generateTree()
    {
        global $availableWords;
        foreach ($availableWords as $i) {
            if (canBeTransfered(array_slice($this->path, -1)[0], $i) and !(in_array($i, $this->path))) {
                $newnode = new node($i, $this);
                array_push($this->childs, $newnode);
            }
        }
    }
    
    public function recursiveSearch($destination)
    {
        $result = "Цепочка не найдена. Может расширить словарь?";
        if (array_slice($this->path, -1)[0] == $destination) {
            $result = $this->path;
        } else {
            foreach ($this->childs as $i) {
                $result = $i->recursiveSearch($destination);
            }
        }
        return($result);
    }
}

class rootNode
{
    public $path = array();
    public $childs = array();
    
    public function generateTree($source)
    {
        global $availableWords;
        array_push($this->path, $source);
        foreach ($availableWords as $i) {
            if (canBeTransfered(array_slice($this->path, -1)[0], $i) and !(in_array($i, $this->path))) {
                $newnode = new node($i, $this);
                array_push($this->childs, $newnode);
            }
        }
    }
    
    public function recursiveSearch($destination)
    {
        $result = "Цепочка не найдена. Может расширить словарь?";
        if (array_slice($this->path, -1)[0] == $destination) {
            $result = $this->path;
        } else {
            foreach ($this->childs as $i) {
                $result = $i->recursiveSearch($destination);
            }
        }
        return($result);
    }
}

$finder = new rootNode();
$finder->generateTree($_GET["source"]);
print("<pre>");
print_r($finder->recursiveSearch($_GET["destination"]));
print("</pre>");
