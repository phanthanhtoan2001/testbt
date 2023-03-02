
<?php
class PTB1
{
    protected $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function tinhNghiem()
    {
        if ($this->a == 0) {
            if ($this->b == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Nghiệm của phương trình là " . (-$this->b / $this->a);
        }
    }
}


class PTB2 extends PTB1
{
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function tinhNghiem()
    {
        if ($this->a == 0) {
            if ($this->b == 0) {
                if ($this->c == 0) {
                    echo "Phương trình có vô số nghiệm";
                } else {
                    echo "Phương trình vô nghiệm";
                }
            } else {
                echo "Nghiệm của phương trình là " . (-$this->c / $this->b);
            }
        } else {
            if ($this->getDelta() < 0) {
                echo "Vô  nghiệm";
            } else if ($this->getDelta() == 0) {
                echo "Phương trình có nghiệm kép là " . (-$this->b / ($this->a * 2));
            } else {
                echo "Nghiệm 1: " . (-$this->b + sqrt($this->getDelta())) / (2 * $this->a) . "<br>";
                echo "Nghiệm 2: " . (-$this->b - sqrt($this->getDelta())) / (2 * $this->a);
            }
        }
    }

    function getDelta()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }
}

$test = new PTB2(1, 2, -1);
$test->tinhNghiem();
?>