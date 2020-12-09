<? php

class Queen
{
    private $columnNumber;
    private $rowNumber;
    
    public function __construct(int($columnNumber), int($rowNumber))
    {
        if ($rowNumber <= 8 && $rowNumber >= 1 && $columnNumber <= 8 && $columnNumber >= 1)
        {
            $this -> column = $columnNumber;
            $this -> row = $rowNumber;
        }
    }
    
    private function setPosition(int($columnNumber), int($rowNumber))
    {
        $this -> column = $columnNumber;
        $this -> row = $rowNumber;
    }
    
    public function getPosition()
    {
        return(['Column Number: ' => $this -> column, 'Row Number: ' => $this -> row]);
    }
    
    public function queenCanMove(int($newColumnNumber), int($newRowNumber))
    {
        if ($newRowNumber > 8 && $newRowNumber < 1 && $newColumnNumber > 8 && $newColumnNumber < 1)
        {
            return ('No');
        }
        
        if ($newColumnNumber != $this->column && $newRowNumber != $this->row)
        {
            return ('No');   
        }
        
        if (abs($this -> column - $newColumnNumber) === abs($this -> row - $newRowNumber))
        {
            return ('Yes');
        }
        
        return ('Yes');
    }
    
    public function queenMove(int($newColumnNumber), int($newRowNumber))
    {
        if ($this -> queenCanMove($newColumnNumber, $newRowNumber) === 'Yes') 
        {
            $this -> setPosition($newColumnNumber, $newRowNumber)
        }
    }
}
